(function () {

    var laroute = (function () {

        var routes = {

            absolute: false,
            rootUrl: 'http://localhost',
            routes : [{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/open","name":"debugbar.openhandler","action":"Barryvdh\Debugbar\Controllers\OpenHandlerController@handle"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/clockwork\/{id}","name":"debugbar.clockwork","action":"Barryvdh\Debugbar\Controllers\OpenHandlerController@clockwork"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/assets\/stylesheets","name":"debugbar.assets.css","action":"Barryvdh\Debugbar\Controllers\AssetController@css"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/assets\/javascript","name":"debugbar.assets.js","action":"Barryvdh\Debugbar\Controllers\AssetController@js"},{"host":null,"methods":["GET","HEAD"],"uri":"login","name":null,"action":"App\Http\Controllers\Auth\AuthController@showLoginForm"},{"host":null,"methods":["POST"],"uri":"login","name":null,"action":"App\Http\Controllers\Auth\AuthController@login"},{"host":null,"methods":["GET","HEAD"],"uri":"logout","name":null,"action":"App\Http\Controllers\Auth\AuthController@logout"},{"host":null,"methods":["GET","HEAD"],"uri":"register","name":null,"action":"App\Http\Controllers\Auth\AuthController@showRegistrationForm"},{"host":null,"methods":["POST"],"uri":"register","name":null,"action":"App\Http\Controllers\Auth\AuthController@register"},{"host":null,"methods":["GET","HEAD"],"uri":"password\/reset\/{token?}","name":null,"action":"App\Http\Controllers\Auth\PasswordController@showResetForm"},{"host":null,"methods":["POST"],"uri":"password\/email","name":null,"action":"App\Http\Controllers\Auth\PasswordController@sendResetLinkEmail"},{"host":null,"methods":["POST"],"uri":"password\/reset","name":null,"action":"App\Http\Controllers\Auth\PasswordController@reset"},{"host":null,"methods":["GET","HEAD"],"uri":"image-resize\/{file}\/{w?}\/{h?}","name":"image.resize","action":"App\Http\Controllers\Backend\DashboardController@resize"},{"host":null,"methods":["GET","HEAD"],"uri":"\/","name":null,"action":"App\Http\Controllers\Frontend\HomeController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"san-pham\/{slug}.html","name":"product.show","action":"App\Http\Controllers\Frontend\ProductController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"product\/search","name":"product.search","action":"App\Http\Controllers\Frontend\ProductController@productSearch"},{"host":null,"methods":["GET","HEAD"],"uri":"danh-muc\/{slug}.html","name":"product.category","action":"App\Http\Controllers\Frontend\ProductController@withCategory"},{"host":null,"methods":["POST"],"uri":"product\/cart\/store\/{id}","name":"product.cart.store","action":"App\Http\Controllers\Frontend\ProductController@cartStore"},{"host":null,"methods":["POST"],"uri":"product\/cart\/update","name":"product.cart.update","action":"App\Http\Controllers\Frontend\ProductController@cartUpdate"},{"host":null,"methods":["POST"],"uri":"product\/cart\/checkout","name":"product.cart.checkout","action":"App\Http\Controllers\Frontend\ProductController@cartCheckout"},{"host":null,"methods":["POST"],"uri":"product\/ajax\/quickview","name":"product.ajax.quickview","action":"App\Http\Controllers\Frontend\ProductController@ajaxQuickview"},{"host":null,"methods":["GET","HEAD"],"uri":"product\/cart\/delete\/{id}","name":"product.cart.delete","action":"App\Http\Controllers\Frontend\ProductController@cartDelete"},{"host":null,"methods":["GET","HEAD"],"uri":"thanh-toan-gio-hang.html","name":"product.cart","action":"App\Http\Controllers\Frontend\ProductController@cart"},{"host":null,"methods":["GET","HEAD"],"uri":"trang\/{slug}.html","name":"page.show","action":"App\Http\Controllers\Frontend\HomeController@page"},{"host":null,"methods":["GET","HEAD"],"uri":"tin-tuc\/{slug}.html","name":"post.category","action":"App\Http\Controllers\Frontend\PostController@category"},{"host":null,"methods":["GET","HEAD"],"uri":"admin","name":null,"action":"App\Http\Controllers\Backend\DashboardController@index"},{"host":null,"methods":["POST"],"uri":"admin\/image\/ajax","name":"admin.image.ajax","action":"App\Http\Controllers\Backend\DashboardController@uploadImage"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/user\/data","name":"admin.user.data","action":"App\Http\Controllers\Backend\UserController@getData"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/user","name":"admin.user.index","action":"App\Http\Controllers\Backend\UserController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/user\/create","name":"admin.user.create","action":"App\Http\Controllers\Backend\UserController@create"},{"host":null,"methods":["POST"],"uri":"admin\/user","name":"admin.user.store","action":"App\Http\Controllers\Backend\UserController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/user\/{user}","name":"admin.user.show","action":"App\Http\Controllers\Backend\UserController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/user\/{user}\/edit","name":"admin.user.edit","action":"App\Http\Controllers\Backend\UserController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/user\/{user}","name":"admin.user.update","action":"App\Http\Controllers\Backend\UserController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/user\/{user}","name":"admin.user.destroy","action":"App\Http\Controllers\Backend\UserController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/profile","name":"admin.profile","action":"App\Http\Controllers\Backend\ProfileController@userShow"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/profile\/edit","name":"admin.profile.edit","action":"App\Http\Controllers\Backend\ProfileController@userEdit"},{"host":null,"methods":["POST"],"uri":"admin\/profile\/update","name":"admin.profile.update","action":"App\Http\Controllers\Backend\ProfileController@userUpdate"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/category\/type\/{type}","name":"admin.category.type","action":"App\Http\Controllers\Backend\CategoryController@getDataWithType"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/category","name":"admin.category.index","action":"App\Http\Controllers\Backend\CategoryController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/category\/create","name":"admin.category.create","action":"App\Http\Controllers\Backend\CategoryController@create"},{"host":null,"methods":["POST"],"uri":"admin\/category","name":"admin.category.store","action":"App\Http\Controllers\Backend\CategoryController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/category\/{category}","name":"admin.category.show","action":"App\Http\Controllers\Backend\CategoryController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/category\/{category}\/edit","name":"admin.category.edit","action":"App\Http\Controllers\Backend\CategoryController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/category\/{category}","name":"admin.category.update","action":"App\Http\Controllers\Backend\CategoryController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/category\/{category}","name":"admin.category.destroy","action":"App\Http\Controllers\Backend\CategoryController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/post\/data","name":"admin.post.data","action":"App\Http\Controllers\Backend\PostController@getData"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/post\/data\/category\/{category}","name":"admin.post.data.category","action":"App\Http\Controllers\Backend\PostController@getDataWithCategory"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/post\/category\/{category}","name":"admin.post.category","action":"App\Http\Controllers\Backend\PostController@category"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/post","name":"admin.post.index","action":"App\Http\Controllers\Backend\PostController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/post\/create","name":"admin.post.create","action":"App\Http\Controllers\Backend\PostController@create"},{"host":null,"methods":["POST"],"uri":"admin\/post","name":"admin.post.store","action":"App\Http\Controllers\Backend\PostController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/post\/{post}","name":"admin.post.show","action":"App\Http\Controllers\Backend\PostController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/post\/{post}\/edit","name":"admin.post.edit","action":"App\Http\Controllers\Backend\PostController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/post\/{post}","name":"admin.post.update","action":"App\Http\Controllers\Backend\PostController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/post\/{post}","name":"admin.post.destroy","action":"App\Http\Controllers\Backend\PostController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/product\/data","name":"admin.product.data","action":"App\Http\Controllers\Backend\ProductController@getData"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/product\/data\/category\/{category}","name":"admin.product.data.category","action":"App\Http\Controllers\Backend\ProductController@getDataWithCategory"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/product\/category\/{category}","name":"admin.product.category","action":"App\Http\Controllers\Backend\ProductController@category"},{"host":null,"methods":["POST"],"uri":"admin\/product\/upload\/image","name":"admin.product.upload.image","action":"App\Http\Controllers\Backend\ProductController@uploadImage"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/product","name":"admin.product.index","action":"App\Http\Controllers\Backend\ProductController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/product\/create","name":"admin.product.create","action":"App\Http\Controllers\Backend\ProductController@create"},{"host":null,"methods":["POST"],"uri":"admin\/product","name":"admin.product.store","action":"App\Http\Controllers\Backend\ProductController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/product\/{product}","name":"admin.product.show","action":"App\Http\Controllers\Backend\ProductController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/product\/{product}\/edit","name":"admin.product.edit","action":"App\Http\Controllers\Backend\ProductController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/product\/{product}","name":"admin.product.update","action":"App\Http\Controllers\Backend\ProductController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/product\/{product}","name":"admin.product.destroy","action":"App\Http\Controllers\Backend\ProductController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/config","name":"admin.config.index","action":"App\Http\Controllers\Backend\ConfigController@index"},{"host":null,"methods":["PATCH"],"uri":"admin\/config\/{id}","name":"admin.config.update","action":"App\Http\Controllers\Backend\ConfigController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/ticket\/data","name":"admin.ticket.data","action":"App\Http\Controllers\Backend\TicketController@getData"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/ticket","name":"admin.ticket.index","action":"App\Http\Controllers\Backend\TicketController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/ticket\/create","name":"admin.ticket.create","action":"App\Http\Controllers\Backend\TicketController@create"},{"host":null,"methods":["POST"],"uri":"admin\/ticket","name":"admin.ticket.store","action":"App\Http\Controllers\Backend\TicketController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/ticket\/{ticket}","name":"admin.ticket.show","action":"App\Http\Controllers\Backend\TicketController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/ticket\/{ticket}\/edit","name":"admin.ticket.edit","action":"App\Http\Controllers\Backend\TicketController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/ticket\/{ticket}","name":"admin.ticket.update","action":"App\Http\Controllers\Backend\TicketController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/ticket\/{ticket}","name":"admin.ticket.destroy","action":"App\Http\Controllers\Backend\TicketController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/page\/data","name":"admin.page.data","action":"App\Http\Controllers\Backend\PageController@getData"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/page","name":"admin.page.index","action":"App\Http\Controllers\Backend\PageController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/page\/create","name":"admin.page.create","action":"App\Http\Controllers\Backend\PageController@create"},{"host":null,"methods":["POST"],"uri":"admin\/page","name":"admin.page.store","action":"App\Http\Controllers\Backend\PageController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/page\/{page}","name":"admin.page.show","action":"App\Http\Controllers\Backend\PageController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/page\/{page}\/edit","name":"admin.page.edit","action":"App\Http\Controllers\Backend\PageController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/page\/{page}","name":"admin.page.update","action":"App\Http\Controllers\Backend\PageController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/page\/{page}","name":"admin.page.destroy","action":"App\Http\Controllers\Backend\PageController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/property\/data","name":"admin.property.data","action":"App\Http\Controllers\Backend\PropertyController@getData"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/property","name":"admin.property.index","action":"App\Http\Controllers\Backend\PropertyController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/property\/create","name":"admin.property.create","action":"App\Http\Controllers\Backend\PropertyController@create"},{"host":null,"methods":["POST"],"uri":"admin\/property","name":"admin.property.store","action":"App\Http\Controllers\Backend\PropertyController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/property\/{property}","name":"admin.property.show","action":"App\Http\Controllers\Backend\PropertyController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/property\/{property}\/edit","name":"admin.property.edit","action":"App\Http\Controllers\Backend\PropertyController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/property\/{property}","name":"admin.property.update","action":"App\Http\Controllers\Backend\PropertyController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/property\/{property}","name":"admin.property.destroy","action":"App\Http\Controllers\Backend\PropertyController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/menu\/section\/{section}","name":"admin.menu.section","action":"App\Http\Controllers\Backend\MenuController@getDataWithSection"},{"host":null,"methods":["POST"],"uri":"admin\/menu\/ajax-update","name":"admin.menu.ajax.update","action":"App\Http\Controllers\Backend\MenuController@ajaxUpdate"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/menu","name":"admin.menu.index","action":"App\Http\Controllers\Backend\MenuController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/menu\/create","name":"admin.menu.create","action":"App\Http\Controllers\Backend\MenuController@create"},{"host":null,"methods":["POST"],"uri":"admin\/menu","name":"admin.menu.store","action":"App\Http\Controllers\Backend\MenuController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/menu\/{menu}","name":"admin.menu.show","action":"App\Http\Controllers\Backend\MenuController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/menu\/{menu}\/edit","name":"admin.menu.edit","action":"App\Http\Controllers\Backend\MenuController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/menu\/{menu}","name":"admin.menu.update","action":"App\Http\Controllers\Backend\MenuController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/menu\/{menu}","name":"admin.menu.destroy","action":"App\Http\Controllers\Backend\MenuController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/slide\/data","name":"admin.slide.data","action":"App\Http\Controllers\Backend\SlideController@getData"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/slide","name":"admin.slide.index","action":"App\Http\Controllers\Backend\SlideController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/slide\/create","name":"admin.slide.create","action":"App\Http\Controllers\Backend\SlideController@create"},{"host":null,"methods":["POST"],"uri":"admin\/slide","name":"admin.slide.store","action":"App\Http\Controllers\Backend\SlideController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/slide\/{slide}","name":"admin.slide.show","action":"App\Http\Controllers\Backend\SlideController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/slide\/{slide}\/edit","name":"admin.slide.edit","action":"App\Http\Controllers\Backend\SlideController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/slide\/{slide}","name":"admin.slide.update","action":"App\Http\Controllers\Backend\SlideController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/slide\/{slide}","name":"admin.slide.destroy","action":"App\Http\Controllers\Backend\SlideController@destroy"}],
            prefix: '',

            route : function (name, parameters, route) {
                route = route || this.getByName(name);

                if ( ! route ) {
                    return undefined;
                }

                return this.toRoute(route, parameters);
            },

            url: function (url, parameters) {
                parameters = parameters || [];

                var uri = url + '/' + parameters.join('/');

                return this.getCorrectUrl(uri);
            },

            toRoute : function (route, parameters) {
                var uri = this.replaceNamedParameters(route.uri, parameters);
                var qs  = this.getRouteQueryString(parameters);

                return this.getCorrectUrl(uri + qs);
            },

            replaceNamedParameters : function (uri, parameters) {
                uri = uri.replace(/\{(.*?)\??\}/g, function(match, key) {
                    if (parameters.hasOwnProperty(key)) {
                        var value = parameters[key];
                        delete parameters[key];
                        return value;
                    } else {
                        return match;
                    }
                });

                // Strip out any optional parameters that were not given
                uri = uri.replace(/\/\{.*?\?\}/g, '');

                return uri;
            },

            getRouteQueryString : function (parameters) {
                var qs = [];
                for (var key in parameters) {
                    if (parameters.hasOwnProperty(key)) {
                        qs.push(key + '=' + parameters[key]);
                    }
                }

                if (qs.length < 1) {
                    return '';
                }

                return '?' + qs.join('&');
            },

            getByName : function (name) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].name === name) {
                        return this.routes[key];
                    }
                }
            },

            getByAction : function(action) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].action === action) {
                        return this.routes[key];
                    }
                }
            },

            getCorrectUrl: function (uri) {
                var url = this.prefix + '/' + uri.replace(/^\/?/, '');

                if(!this.absolute)
                    return url;

                return this.rootUrl.replace('/\/?$/', '') + url;
            }
        };

        var getLinkAttributes = function(attributes) {
            if ( ! attributes) {
                return '';
            }

            var attrs = [];
            for (var key in attributes) {
                if (attributes.hasOwnProperty(key)) {
                    attrs.push(key + '="' + attributes[key] + '"');
                }
            }

            return attrs.join(' ');
        };

        var getHtmlLink = function (url, title, attributes) {
            title      = title || url;
            attributes = getLinkAttributes(attributes);

            return '<a href="' + url + '" ' + attributes + '>' + title + '</a>';
        };

        return {
            // Generate a url for a given controller action.
            // laroute.action('HomeController@getIndex', [params = {}])
            action : function (name, parameters) {
                parameters = parameters || {};

                return routes.route(name, parameters, routes.getByAction(name));
            },

            // Generate a url for a given named route.
            // laroute.route('routeName', [params = {}])
            route : function (route, parameters) {
                parameters = parameters || {};

                return routes.route(route, parameters);
            },

            // Generate a fully qualified URL to the given path.
            // laroute.route('url', [params = {}])
            url : function (route, parameters) {
                parameters = parameters || {};

                return routes.url(route, parameters);
            },

            // Generate a html link to the given url.
            // laroute.link_to('foo/bar', [title = url], [attributes = {}])
            link_to : function (url, title, attributes) {
                url = this.url(url);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given route.
            // laroute.link_to_route('route.name', [title=url], [parameters = {}], [attributes = {}])
            link_to_route : function (route, title, parameters, attributes) {
                var url = this.route(route, parameters);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given controller action.
            // laroute.link_to_action('HomeController@getIndex', [title=url], [parameters = {}], [attributes = {}])
            link_to_action : function(action, title, parameters, attributes) {
                var url = this.action(action, parameters);

                return getHtmlLink(url, title, attributes);
            }

        };

    }).call(this);

    /**
     * Expose the class either via AMD, CommonJS or the global object
     */
    if (typeof define === 'function' && define.amd) {
        define(function () {
            return laroute;
        });
    }
    else if (typeof module === 'object' && module.exports){
        module.exports = laroute;
    }
    else {
        window.laroute = laroute;
    }

}).call(this);

