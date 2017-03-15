/*sidebar*/
$(document).ready(function() {
	function setHeight() {
		windowHeight = $(window).innerHeight();
		$('.sidebar').css('min-height', windowHeight);
	};
	setHeight();
  
	$(window).resize(function() {
		setHeight();
	});
});
// $(document).ready(function(){
//     $('#history-link').click(function(){
//         $('.rightside-page').fadeOut('slow',function(){
//             $('.rightside-page').html($('.history').html());
//                $('.rightside-page').fadeIn('slow');
//         })            
//     })
//     $('#analysis-link').click(function(){
//         $('.rightside-page').fadeOut('slow',function(){
//             $('.rightside-page').html($('.analysis').html());
//                $('.rightside-page').fadeIn('slow');
//         })            
//     })
//     $('#account-link').click(function(){
//         $('.rightside-page').fadeOut('slow',function(){
//             $('.rightside-page').html($('.account').html());
//                $('.rightside-page').fadeIn('slow');
//         })            
//     })
// });

/*analysis*/
 // tabbed content
    // http://www.entheosweb.com/tutorials/css/tabs.asp
    $(".tab_content").hide();
    $(".tab_content:first").show();

  /* if in tab mode */
    $("ul.tabs li").click(function() {
        
      $(".tab_content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();        
        
      $("ul.tabs li").removeClass("active");
      $(this).addClass("active");

      $(".tab_drawer_heading").removeClass("d_active");
      $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
      
    });
    /* if in drawer mode */
    $(".tab_drawer_heading").click(function() {
      
      $(".tab_content").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).fadeIn();
      
      $(".tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");
      
      $("ul.tabs li").removeClass("active");
      $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
    
    
    /* Extra class "tab_last" 
       to add border to right side
       of last tab */
    $('ul.tabs li').last().addClass("tab_last");
 
 //chart
$(function() {
  $(".chart-bars li .bar").each( function( key, bar ) {
    var percentage = $(this).data('percentage');
    
    $(this).animate({
      'height' : percentage + '%'
    }, 1000);
  });
});