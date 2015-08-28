(function($){

    $.fn.modal_box = function(){

        // Default parameters
        var imageClass="portofolio_zoomed_image";
        var block_page = $('<div class="block_page"></div>');
        var src='';

        // remove block_page from DOM
        remove_block_page();


        //modal click function        
        return this.click(function(e){
            src = $(this).attr('src');
            init_image();
            add_block_page();
            add_popup_box();
            style_block_page();
            showModalBox();
            
        });


        function showModalBox(){
            $('.modal_box').fadeIn("slow");
        }

        function init_image(){
            $('.modal img').modal_box({
                image:'<img class="'+imageClass+'"src="'+src+'" alt="">',
            });

        }

        function style_block_page(){         
            var pageHeight = $(document).height();
            $('.block_page').css({
                'height':pageHeight,
            });
        }
        
        function add_block_page(){       
            $(block_page).appendTo('body');
        }

        function remove_block_page(){
            $(".block_page").remove();
        }


        function add_popup_box(){
           var pop_up = $('<div class="modal_box"><a href="#" class="modal_close"></a><div class="inner_modal_box">' +'<img class="'+imageClass+'"src="'+src+'" alt="">', + '</div></div>');
           $(pop_up).appendTo('.block_page');

              //close button click           
            $('.modal_close').click(function(){
                $(this).parent().fadeOut().remove();
                $('.block_page').fadeOut().remove();                
            });

          }

          return this;
      };

  })(jQuery);