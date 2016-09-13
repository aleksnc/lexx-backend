//left Block Sections

$(document).ready(function(){

  /*leftBlock select*/

  $('.leftBlock__section li:first-child').addClass('leftBlock__section--btn');
  $('.leftBlock__section li:not(:first-child)').addClass('leftBlock__section--li');

  $('.leftBlock__section--btn').on( 'click', function(){
    $('.leftBlock__section--btn').toggleClass('select', false);
    $('.leftBlock__section').toggleClass('leftBlock__section--select', false);
    var $this =$(this);
    $this.toggleClass('select');
    $this.parent().toggleClass('leftBlock__section--select');
  });

  /*explorer*/
  $('.explorer__path-list').each(function(){
    var lvParth = $(this).data('lv');
    if(lvParth>1){
      $(this).css('display','none');
    }
    var lvPadding = lvParth*20+15;
    $(this).css('padding-left', lvPadding);
  });



  $('.explorer__path-list').click(function() {
    $(this).toggleClass('ico-blog-o');

    var dataBtn= $(this).data('lv');

    if(dataBtn ==1) {
      $('.explorer__path-list').each(function () {
        if ($(this).data('lv') > dataBtn) {
          $(this).css('display', 'none');
          $(this).toggleClass('ico-blog-o', false);
        }
      });
    }

    var $this = $(this);
    var $child = $this.next();
    var $childlv = $child.data('lv')+'a';
    var $thislv = $(this).data('lv')+'a';
    var $staticLv =$childlv;

    if($thislv<$childlv){
      $child.toggle();
      findChild($child, $childlv, $staticLv);
    }

    function findChild($child, $childlv, $staticLv) {

      if ($child.hasClass('explorer__path-list')) {

        var $childNext = $child.next();
        var $childNextlv = $childNext.data('lv')+'a';

        if ($childNextlv == $staticLv) {

          $childNext.toggle();
          $child = $childNext;
          $childlv = $childNextlv;

          return findChild($child, $childlv, $staticLv);

        } else {
          if ($childNextlv < $staticLv) {
            return(false);
          } else{

            $child = $childNext;
            $childlv = $childNextlv;

            return findChild($child, $childlv, $staticLv);
          }
        }

      }
    }
  });


$('.explorer__path-list').on('click',function() {
        $(this).toggleClass('ico-blog-o');
        var htmla= $(this).find('a').html();

        console.log(htmla);

        $('.cke_editable p').value = htmla;
});
/* right-block edit*/

  CKEDITOR.replace('editor1');

});