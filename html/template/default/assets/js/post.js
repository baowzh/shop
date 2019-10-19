
$(function() {
	$
			.ajax({
				url : window.baseURL+window.blogPath+"/wp-json/wp/v2/posts?page=1&per_page=10&status=publish",
				dataType : 'json',
				success : function(data) {
					for (var i = 0; i < data.length; i++) {
						console.log(data[i]);
						var li = $('<li>').attr({
							'class' : 'odd'
						});
						var a = $('<a>').attr(
								{
									'href' : window.baseURL+"/post/detail/"+data[i].id,
									'title' : data[i].title.rendered
								}).text(data[i].title.rendered);
						li.append($('<p>').append(a));
						li.append($('<span>').text(data[i].date));
						$('#rankList').append(li);

					}

				}
			});

});
