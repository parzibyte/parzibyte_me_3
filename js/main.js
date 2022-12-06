document.addEventListener("DOMContentLoaded", () => {
    tns({
        container: '#slider',
        slideBy: 'page',
        mouseDrag: true,
        items: 3,
        lazyload: true,

        //autoWidth:true,
        autoplay: true,
        rewind: true,
        gutter: 10,
        controls: false,
        nav: false,
        autoplayButtonOutput: false,

    });
});