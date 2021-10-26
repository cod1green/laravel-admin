window._ = require('lodash');

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('admin-lte');
    require('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js');

    // Plugins
    window.Toastify = require('toastify-js');
    window.toastr = require('admin-lte/plugins/toastr/toastr.min.js');
    require('admin-lte/plugins/select2/js/select2.full.min.js');
    require('admin-lte/plugins/select2/js/i18n/pt-BR.js');

    require('./sidebar-rigth');
    require('./backend_ready');

} catch (e) {
}
