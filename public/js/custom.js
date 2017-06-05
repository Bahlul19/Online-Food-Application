
//Function for Areapage
$(function(){
    $('#Area').keyup(function(){
        var values = $(this).val();
        var Anything = $('#AreaUnderShow').html(values+'('+values.length+')');

        if(values.length==0)
        {
            $('#AreaUnderShow').empty();
        }
    })
})


//Function for RestaurantPage
$(function(){

    $('#Restaurant').keyup(function(){
        var values = $(this).val();
        var Anything = $('#RestaurantUnderShow').html(values+'('+values.length+')')
        if(values.length==0)
        {
            $('#RestaurantUnderShow').empty();
        }
    })


})


//Function for FoodItem
$(function(){

    $('#FoodItem').keyup(function(){
        var values = $(this).val();
        var Anything = $('#FoodItemUnderShow').html(values+'('+values.length+')')
        if(values.length==0)
        {
            $('#FoodItemUnderShow').empty();
        }
    })


})

//Function For FoodDescription
$(function(){

    $('#Description').keyup(function(){
        var values = $(this).val();
        var Anything = $('#FoodItemUnderShow2').html(values+'('+values.length+')')
        if(values.length==0)
        {
            $('#FoodItemUnderShow2').empty();
        }
    })

})



//Function For Price
$(function(){

    $('#Price').keyup(function(){
        var values = $(this).val();
        var Anything = $('#FoodItemUnderShow3').html(values+'('+values.length+')')
        if(values.length==0)
        {
            $('#FoodItemUnderShow3').empty();
        }
    })

})


//Function For Tag
$(function(){

    $('#Tag').keyup(function(){
        var values = $(this).val();
        var Anything = $('#FoodItemUnderShow4').html(values+'('+values.length+')')
        if(values.length==0)
        {
            $('#FoodItemUnderShow4').empty();
        }
    })

})


