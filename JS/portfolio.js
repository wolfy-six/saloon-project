function hideonstart() {
    $(document).ready(function() {
        $(".section-02").hide();
    });
}

function showhideSection() {

    $(document).ready(function(){
        $("#show").click(function(){
          $(".section-02").toggle();
        });
      });
    
    
}

