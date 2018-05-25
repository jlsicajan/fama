$(document).ready(function(){
    $('.ajax_link').unbind('click').click(function(){

        let load_page_ajax = get_path_ajax_to_load($(this));
        $('.ajax_link').removeClass('active');
        $(this).addClass('active');

        // alert(load_page_ajax);

        clean_main_content_container(function () {
            console.log('done!');
        }, load_page_ajax);
    });

});


function get_path_ajax_to_load(element){
    let original_href = element.attr('data-href');

    let page_to_load = element.attr('data-href');
    let location = window.location.origin;

    page_to_load = page_to_load.replace('http://mia937.elcaminoweb.com/', '');
    page_to_load = page_to_load.replace(location, '');

    let content_to_load = '';

    if(page_to_load.includes('home')){
        page_to_load = page_to_load.replace('home', '');
    }else{

    }
    if(page_to_load.includes('articulo')){
        page_to_load = page_to_load.replace('articulo', 'ajax');

        content_to_load = location + '/' + page_to_load;
    }else{
        content_to_load = location + '/' + page_to_load + '_ajax';
    }

    window.history.pushState({"html": content_to_load,"pageTitle":content_to_load},"", content_to_load);

    console.log(location);
    console.log(content_to_load);

    return content_to_load;
}