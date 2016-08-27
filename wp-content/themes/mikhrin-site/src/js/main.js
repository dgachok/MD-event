// Carousel

$('.carousel').carousel({
    interval: 100000
});

// Services

function services() {

    var serviceTmpl = $("#serviceTemplateBlock").html();
    
    $(".js-service").each(function (index) {
        var data = $(this).attr('data-json'),
            $data = jQuery.parseJSON(data),
            _this = $(this);
        
        _this.hover(showBlock, hideBlock);

        function showBlock() {
            var _self = $(this),
                $title = $($(this).find(".js-service-t")),
                serviceTmpls = _serviceTmpl(serviceTmpl, $data);

            $title.before(serviceTmpls);
            animateShow($(_self.find('.js-service-h')));
        }

        function hideBlock() {
            var _self = $(this),
                block_h = $(_self.find('.js-service-h'));

            animateHide(block_h, function () {
                setTimeout(function () {
                    block_h.remove();
                }, 1000);
            });
        }
        function _serviceTmpl(tmpl, data) {
            var _tmpls = tmpl;

            _tmpls = _tmpls.replace("{title}", data.title);
            _tmpls = _tmpls.replace("{description}", data.description);

            return _tmpls;
        }
    });
}

function animateShow(el, callback) {
    el.show();
    el.animate({
            opacity:1
        },0);
    if(callback) callback();
}

function animateHide(el, callback) {
    el.animate({
            opacity:0
        },0);
    if(callback) callback();
}

// Propose blocks

function propose(){
    var el = '.js-propose-brand',
        $el = $(el),
        active = 'propose__block--active';
    $el.on("click", function () {
        var _this = $(this),
            attr = _this.attr('data-type'),
            item = '.js-propose-item',
            $item = $(item);
        if(!(_this.hasClass(active))){
            $el.removeClass(active);
            _this.addClass(active);
        }

        $item.each(function (i) {
            var _self = $(this),
                speed = 500,
                attr_item = _self.attr('data-type');
            if(attr == attr_item){
                setTimeout(function () {
                    _self.fadeIn(speed);
                }, speed);
            }else{
                _self.fadeOut(speed);

            }
        })
    })
}

