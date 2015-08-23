(function(){
     
        function App(el){
            // Default parameters
             this.imageClass="portofolio_zoomed_image";
             this.$block_page_div = $('<div class="block_page"></div>');
             this.$block_page = $('.block_page');
             this.$modal_close =$('.modal_close');
             this.$src='';
             this.$modalbox=$('modalbox');
             this.$modal=$('.modal');

              this.Remove_block_page(this.$block_page);
             //Functions
             return el.click(function(e){
              this.$src = $(this).attr('src');
              this.Init_image(this.$modal,this.imageClass,this.$src);
              this.Add_block_page(this.$block_page_div);
              this.Add_popup_box(this.$modal_close_button,this.$block_page);
              this.Style_block_page(this.$block_page);
              this.ShowModalBox(this.$modalbox);
            })

        }


        App.prototype.ShowModalBox = function($modalbox){
            $modalbox.fadeIn("slow");
        }

        App.prototype.Init_image = function($modal,imageClass,$src){
           $modal.App({
                image:'<img class="'+imageClass+'"src="'+$src+'" alt="">',
            });

        }

        App.prototype.Style_block_page = function($block_page){         
            var pageHeight = $(document).height();
           $block_page.css({
                'height':pageHeight,
            });
        }
        
         App.prototype.Add_block_page = function($block_page_div){       
            $($block_page_div).appendTo('body');
        }

        
        App.prototype.Remove_block_page = function($block_page){
           $block_page.remove();
        }


       App.prototype.Add_popup_box = function($modal_close_buttn,$block_page){
           var pop_up = $('<div class="modal_box"><a href="#" class="modal_close"></a><div class="inner_modal_box">' +'<img class="'+imageClass+'"src="'+src+'" alt="">', + '</div></div>');
           $(pop_up).appendTo('.block_page');

              //close button click           
                $modal_close.click(function(){
                $(this).parent().fadeOut().remove();
                $block_page.fadeOut().remove();                
            });
          }


           $(function(){
                var app = new App($('.modal'));
            })


  }());