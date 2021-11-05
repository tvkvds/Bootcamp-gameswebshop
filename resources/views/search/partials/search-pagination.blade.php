<div class="d-flex justify-content-center mt-4">
    <ul class="pagination">
    </ul>
</div>

@push('scripts')

    <script>
        var numberOfCards = $("#card-loop .card").length;
        var pageLimit = 5;
        $("#card-loop .card:gt(" + (pageLimit - 1) + ")").hide();
        var totalPages = Math.ceil(numberOfCards / pageLimit);

        //check to see if there are anny results
        if (numberOfCards === 0){
            $(".pagination").append("<h5 class='text-center'>No Results</h5>");
        } else {
            //place left arrows
            $(".pagination").append("<a class='page-link page-prev' href='#'><span><<</span></a>");
            //place numbers
            $(".pagination").append("<li class='page-item page-number active'><a class='page-link' href='#''>" + 1 + "</a></li>");
            for (var i = 2; i <= totalPages; i++){
                $(".pagination").append("<li class='page-item page-number'><a class='page-link' href='#''>" + i + "</a></li>");
            };
            //place right arrows
            $(".pagination").append("<a class='page-link page-next' href='#'><span>>></span></a>");

            //page number functionality
            $(".pagination li.page-number").on("click", function(){
                if ($(this).hasClass("active")){
                    return false;
                } else {
                    var currentPage = $(this).index();
                    $(".pagination li").removeClass("active");
                    $(this).addClass("active");
                    $("#card-loop .card").hide();

                    var total = pageLimit * currentPage;
                    for (var i = total - pageLimit; i < total; i++){
                        $("#card-loop .card:eq(" + i + ")").show();
                    }
                }
                $('.card-img-div').each(function(){
                    $(this).height( $(this).width() / 1.5);
                }); 
            });
            
            //next button functionality 
            $(".page-next").on("click", function(){
                var currentPage = $(".pagination li.active").index();
                if (currentPage === totalPages){
                    return false;
                } else {
                    currentPage++;
                    $(".pagination li").removeClass("active");
                    $("#card-loop .card").hide();

                    var total = pageLimit * currentPage;
                    for (var i = total - pageLimit; i < total; i++){
                        $("#card-loop .card:eq(" + i + ")").show();
                    }
                    $(".pagination li.page-number:eq(" + (currentPage - 1) + ")").addClass("active");
                }
                $('.card-img-div').each(function(){
                    $(this).height( $(this).width() / 1.5);
                }); 
            });

            //prev button functionality 
            $(".page-prev").on("click", function(){
                var currentPage = $(".pagination li.active").index();
                if (currentPage === 1){
                    return false;
                } else {
                    currentPage--;
                    $(".pagination li").removeClass("active");
                    $("#card-loop .card").hide();

                    var total = pageLimit * currentPage;
                    for (var i = total - pageLimit; i < total; i++){
                        $("#card-loop .card:eq(" + i + ")").show();
                    }
                    $(".pagination li.page-number:eq(" + (currentPage - 1) + ")").addClass("active");
                }
                $('.card-img-div').each(function(){
                    $(this).height( $(this).width() / 1.5);
                }); 
            });
        };

        

    </script>

@endpush