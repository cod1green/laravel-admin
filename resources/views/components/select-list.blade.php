<div>
    <div wire:ignore class="w-full">
        @if(isset($attributes['multiple']))
            <div id="{{ $attributes['id'] }}-btn-container" class="mb-3">
                <button type="button" class="btn btn-default btn-sm select-all-button">
                    <i class="fa fa-check"></i> @lang('global.select_all')
                </button>
                <button type="button" class="btn btn-default btn-sm deselect-all-button">
                    <i class="fa fa-trash-alt"></i> @lang('global.deselect_all')
                </button>
            </div>
        @endif

        <select class="select2 form-control" data-minimum-results-for-search="Infinity"
                data-placeholder="{{ __('Select your option') }}" {{ $attributes }}>
            @if(!isset($attributes['multiple']))
                <option></option>
            @endif
            @foreach($options as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
    </div>
</div>

@push('styles')
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            color: #495057;
            border: 1px solid #bdc6d0;
        }
    </style>
@endpush
@push('scripts')
    <script>
        document.addEventListener("livewire:load", () => {
            let el = $('#{{ $attributes['id'] }}')
            let buttonsId = '#{{ $attributes['id'] }}-btn-container'

            function initButtons() {
                $(buttonsId + ' .select-all-button').click(function (e) {
                    el.val(_.map(el.find('option'), opt => $(opt).attr('value')))
                    el.trigger('change')
                })

                $(buttonsId + ' .deselect-all-button').click(function (e) {
                    el.val([])
                    el.trigger('change')
                })
            }

            function initSelect() {
                initButtons()
                el.select2({
                    placeholder: '{{ __('Select your option') }}',
                    allowClear: !el.attr('required')
                })
            }

            initSelect()

            Livewire.hook('message.processed', (message, component) => {
                initSelect()
            });

            el.on('change', function (e) {
                let data = $(this).select2("val")

            @this.set('{{ $attributes['wire:model'] }}', data)
            });
        });
    </script>
@endpush
