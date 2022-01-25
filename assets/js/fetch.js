$(document).ready(function(){
    fetchdefaultnews();
});

async function fetchdefaultnews()
{
    // Display load until the new is fetched
    $('.new_news_loader_spinner').html(
        '<div class="spinner-border" role="status">'+
        '<span class="visually-hidden">Loading...</span>'+
       '</div>'
    );
    var result = await getnewsdata();
    if(result.articles.length > 0)
    {
       $('.new_news_loader_spinner').html('');
       $('.show_data').html('');
        $.each(result.articles, function(i,v){
            var final_index = i+1;
            $('.show_data').append(
                '<tr>'+
                    '<th>'+final_index+'</th>'+
                    '<td>'+v.title+'</td>'+
                    '<td>'+v.description+'</td>'+
                    '<td><a href="'+v.url+'">'+v.url+'</a></td>'+
                '</tr>'
            );
        }); 
    }
   
}

function getnewsdata()
{
    // for the sake of this test i am using $.get else i could have use ajax for that matter
    var language = $('#language_meta').val();
    var country = $('#country_meta').val();
    var max = 15;
    var lastdate = new Date(Date.now() - 10 * 24 * 60 * 60 * 1000);
    // last date to iso
    var lastdate_f = lastdate.toISOString(); 
    var date = new Date();
    var current_date = date.toISOString(); 

    return $.get("https://gnews.io/api/v4/search?q=example&lang="+language+"&country="+country+"&max="+max+"&from="+current_date+"&to="+lastdate_f+"&token=1b8417c57f1dd580462383a8abf66d4b");
   
    // $.ajax({
    //     url : ""+url+"fetchnews?lang="+language+"&country="+country+"",
    //     method : "get",
    //     dataType : "json",
    //     success:function(response)
    //     {
    //         return response;
    //     }
    // });
}
$('#filter_news_btn').click(function(){
    fetchdefaultnews();
});