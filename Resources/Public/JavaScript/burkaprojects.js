$(function(){
    $('a.tx-burkaprojects-magnificpopup').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        },
        verticalFit: true,
        image: {
            titleSrc: function(item) {
              return item.el.children().attr('title');
            }
        }
    });
});