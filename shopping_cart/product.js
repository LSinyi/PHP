$(function() {
    $('.add-to-cart').on('submit', function() {
    	var id = $(this).closest('tr').find('.product-id').text();
    	var name = $(this).closest('tr').find('.product-name').text();
    	var quantity = $(this).closest('tr').find('input').val();
    	window.location.href = "add_cart.php?id=" + id + "&name=" + name + "&quantity=" + quantity;
    	return false;
    });
});
