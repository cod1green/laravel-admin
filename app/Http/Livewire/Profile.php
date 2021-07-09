<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Profile extends Component
{
    use WithFileUploads;

    public User $user;
    public $photo;

    public string $current_password = '';
    public string $password = '';
    public string $password_confirmation = '';

    public function render()
    {
        return view('livewire.profile');
    }

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function submit()
    {
        $this->validate();

        if ($this->photo !== null) {
            $filename = Str::slug($this->user->name) . '.' . $this->photo->getClientOriginalExtension();

            $media = $this->user
                ->addMedia($this->photo->getRealPath())
                ->usingFileName($filename)
                ->toMediaCollection('avatar');

            $this->user->avatar_id = $media->id;
        }

        $this->user->password = $this->password;
        $this->user->save();

        Auth::login($this->user);

        return redirect()->route('profile');
    }

    public function selectePhoto(int $id)
    {
        $this->user->avatar_id = $id;
        $this->user->save();

        return redirect()->route('profile');
    }

    public function removePhoto(Media $media)
    {
        $media->delete();

        if ($media->id === $this->user->avatar_id) {
            $this->user->avatar_id = null;
            $this->user->save();
        }

        return redirect()->route('profile');
    }

    protected function rules(): array
    {
        return [
            'user.name' => [
                'required',
                'string',
                'max:150'
            ],
            'user.email' => [
                'required',
                'email:rfc',
                'max:150',
                "unique:users,email,{$this->user->id},id",
                function ($attribute, $value, $fail) {
                    if ($value !== auth()->user()->email && empty($this->current_password)) {
                        $fail(__('project.user.email_not_changed_current_password_required'));
                    }
                }
            ],
            'current_password' => [
                'required_with:password',
                function ($attribute, $value, $fail) {
                    if (!Hash::check($value, auth()->user()->password)) {
                        $fail(__('project.user.current_password_incorrect'));
                    }
                }
            ],
            'password' => [
                'nullable',
                'min:8',
                'confirmed',
            ],
            'photo' => [
                'nullable',
                'image',
                'max:1024',
                function ($attribute, $value, $fail) {
                    if (auth()->user()->getMedia('avatar')->count() >= 3) {
                        $fail(__('project.user.only_3_photo_per_user'));
                    }
                }
            ]
        ];
    }
}
