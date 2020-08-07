<style>
    *, body {
    margin: 0;
    padding: 0;
    }
    .flex {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    }
    .contentku {
    height: 100px;
    width: 45%;
    color: #fff;
    font-size: 24px;
    line-height: 100px; /* centering text just for view */
    text-align: center;
    background-color: grey;
    margin: 5px;
    border: 1px solid lightgrey;
    display: none;
    }
    #loadMore {
    width: 200px;
    color: #fff;
    display: block;
    text-align: center;
    margin: 20px auto;
    padding: 10px;
    border-radius: 10px;
    border: 1px solid transparent;
    background-color: blue;
    transition: .3s;
    }
    #loadMore:hover {
    color: blue;
    background-color: #fff;
    border: 1px solid blue;
    text-decoration: none;
    }
    .noContent {
    color: #000 !important;
    background-color: transparent !important;
    pointer-events: none;
    }
</style>
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<div class="container">
  <div class="flex">
    <div class="contentku">Box 1</div>
    <div class="contentku">Box 2</div>
    <div class="contentku">Box 3</div>
    <div class="contentku">Box 4</div>
    <div class="contentku">Box 5</div>
    <div class="contentku">Box 6</div>
    <div class="contentku">Box 7</div>
    <div class="contentku">Box 8</div>
    <div class="contentku">Box 9</div>
    <div class="contentku">Box 10</div>
    <div class="contentku">Box 11</div>
    <div class="contentku">Box 12</div>
    <div class="contentku">Box 13</div>
    <div class="contentku">Box 14</div>
    <div class="contentku">Box 15</div>
    <div class="contentku">Box 16</div>
  </div>
  
  <a href="#" id="loadMore">Load More</a>
</div>

<script>
    $(document).ready(function(){
    $(".contentku").slice(0, 4).show();
    $("#loadMore").on("click", function(e){
        e.preventDefault();
        $(".contentku:hidden").slice(0, 4).slideDown();
        if($(".contentku:hidden").length == 0) {
        $("#loadMore").text("No Content").addClass("noContent");
        }
    });
    
    })
</script>