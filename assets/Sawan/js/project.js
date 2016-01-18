function S_add_prj_sub()
{
//    alert($('#S_p_name').val());
    $.ajax
    ({
        url: window.location.origin +'/seppro/index.php/Project/frm_submit',
        type: 'POST',
        data: {
            'S_p_name' : $('#S_p_name').val(),
            'S_p_desc' : $('#S_p_desc').val(),
            'S_p_tech' : $('#S_p_tech').val(),
            'S_c_name' : $('#S_c_name').val(),
            'S_c_email' : $('#S_c_email').val(),
            'S_tel_no' : $('#S_tel_no').val()
        },
        success: function(data) 
        {
            if (data === '1')
            {
                alert("Successfully Inserted");
                window.location.reload();
            }
            else
            {
                alert("Inserting failed");
            }
        },
        error: function(error) 
        {
            alert(error);
        }
    });
}
function S_view_prj_sub()
{
    window.location.href = window.location.origin +'/seppro/index.php/Project/view_project';
}
function updateprj(prj_id)
{
    $.ajax
    ({
        url: window.location.origin +'/seppro/index.php/Project/update_project',
        type: 'POST',
        data: {
            'prj_id' : prj_id
        },
        success: function(data) 
        {
            $.colorbox({html: data});
            $.colorbox.resize();
//            if (data === '1')
//            {
//                alert("Successfully Inserted");
//                window.location.reload();
//            }
//            else
//            {
//                alert("Inserting failed");
//            }
        },
        error: function(error) 
        {
            alert(error);
        }
    });
}
