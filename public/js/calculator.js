$(document).ready(() => {
    var old_rect_unit = "";
    var old_circle_unit = "";
    var converted_rect_volume = 0;
    var converted_circle_volume = 0;
    update_rect_volume();
    update_circle_volume()

    var current_rect_unit = $('#rect_volume_unit').val();
    //console.log(current_rect_unit);
    var current_circle_unit = $('#circle_volume_unit').val();
    //console.log(current_circle_unit);

    function update_rect_volume() {
        var rect_quantity = parseFloat($('#rect_quantity').val());
        //console.log(rect_quantity);
        var rect_quantity_length = parseFloat($('#rect_quantity_length').val());
        //console.log(rect_quantity_length);
        var rect_quantity_width = parseFloat($('#rect_quantity_width').val());
        //console.log(rect_quantity_width);
        var rect_quantity_height = parseFloat($('#rect_quantity_height').val());
        //console.log(rect_quantity_height);
        current_rect_unit = $('#rect_volume_unit').val();
        //console.log(current_rect_unit);

        var rect_volume = rect_quantity * rect_quantity_length * rect_quantity_width * rect_quantity_height;
        $("#rect_volume").val((rect_volume).toFixed(8));

    }

    function update_circle_volume() {
        var circle_quantity = parseFloat($('#circle_quantity').val());
        //console.log(circle_quantity);
        var circle_quantity_diameter_top = parseFloat($('#circle_quantity_diameter_top').val());
        //console.log(circle_quantity_diameter_top);
        var circle_quantity_diameter_base = parseFloat($('#circle_quantity_diameter_base').val());
        //console.log(circle_quantity_diameter_base);
        var circle_quantity_depth = parseFloat($('#circle_quantity_depth').val());
        //console.log(circle_quantity_depth);
        current_circle_unit = $('#circle_volume_unit').val();
        //console.log(current_circle_unit);

        var circle_volume = circle_quantity * circle_quantity_depth * 3.14 * circle_quantity_diameter_base * circle_quantity_diameter_base / 4 + ((circle_quantity_diameter_top - circle_quantity_diameter_base) * 0.3 * circle_quantity_depth * 2 * 3.14 * ((circle_quantity_diameter_top/2)-((circle_quantity_diameter_top-circle_quantity_diameter_base)/2)));
        $("#circle_volume").val((circle_volume).toFixed(8));

    }

    $("#update_rect_form").on('click', (event) => {
        event.preventDefault();
        update_rect_volume();
    });

    $("#update_circle_form").on('click', (event) => {
        event.preventDefault();
        update_circle_volume();
    });

    $('#rect_volume_unit').on('change', () => {
        old_rect_unit = current_rect_unit;
        current_rect_unit = $('#rect_volume_unit').val();

        //feet to in,cm,m,yd,l///////////////////////////////////////////////////////////////////////
        if(old_rect_unit === 'ft' && current_rect_unit === 'in') {
            //console.log('changing cubic ft to cubic in.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 1728;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        } 
        else if (old_rect_unit === 'ft' && current_rect_unit === 'cm') {
            //console.log('changing cubic ft to cubic cm.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 28316.8;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'ft' && current_rect_unit === 'm') {
            //console.log('changing cubic ft to cubic m.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 0.02832;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'ft' && current_rect_unit === 'yd') {
            //console.log('changing cubic ft to cubic yd.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 0.03703;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'ft' && current_rect_unit === 'l') {
            //console.log('changing cubic ft to cubic l.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 28.321;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        

        //in to ft,cm,m,yd,l///////////////////////////////////////////////////////////////////////
        else if (old_rect_unit === 'in' && current_rect_unit === 'ft') {
            //console.log('changing cubic in to cubic ft.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) / 1728;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'in' && current_rect_unit === 'cm') {
            //console.log('changing cubic in to cubic cm.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 30.48 / 1728  ;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'in' && current_rect_unit === 'm') {
            //console.log('changing cubic in to cubic m.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 0.028321 / 1728  ;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'in' && current_rect_unit === 'yd') {
            //console.log('changing cubic in to cubic yd.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 0.03703 / 1728  ;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'in' && current_rect_unit === 'l') {
            //console.log('changing cubic in to l.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 28.321 / 1728  ;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }


        //cm to in,ft,m,yd,l///////////////////////////////////////////////////////////////////////
        else if (old_rect_unit === 'cm' && current_rect_unit === 'ft') {
            //console.log('changing cubic cm to cubic ft.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) / 28316.8;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'cm' && current_rect_unit === 'in') {
            //console.log('changing cubic cm to cubic in.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 1728 / 28316.8;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'cm' && current_rect_unit === 'm') {
            //console.log('changing cubic cm to cubic m.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 0.028321 / 28316.8;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'cm' && current_rect_unit === 'yd') {
            //console.log('changing cubic cm to cubic yd.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 0.03703 / 28316.8;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'cm' && current_rect_unit === 'l') {
            //console.log('changing cubic cm to l.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 28.321 / 28316.8;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }



        //m to ft,in,cm,yd,l///////////////////////////////////////////////////////////////////////
        else if (old_rect_unit === 'm' && current_rect_unit === 'ft') {
            //console.log('changing cubic m to cubic ft.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) / 0.028321;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'm' && current_rect_unit === 'in') {
            //console.log('changing cubic m to cubic in.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 1728 / 0.028321;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'm' && current_rect_unit === 'cm') {
            //console.log('changing cubic m to cubic cm.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 28316.8 / 0.028321;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'm' && current_rect_unit === 'yd') {
            //console.log('changing cubic m to cubic yd.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 0.03703 / 0.028321;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'm' && current_rect_unit === 'l') {
            //console.log('changing cubic m to l.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 28.321 / 0.028321;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }

        //yd to ft,in,cm,m,l///////////////////////////////////////////////////////////////////////
        else if (old_rect_unit === 'yd' && current_rect_unit === 'ft') {
            //console.log('changing cubic yd to cubic ft.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) / 0.03703;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'yd' && current_rect_unit === 'in') {
            //console.log('changing cubic yd to cubic in.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 1728 / 0.03703;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'yd' && current_rect_unit === 'cm') {
            //console.log('changing cubic yd to cubic cm.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 28316.8 / 0.03703;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'yd' && current_rect_unit === 'm') {
            //console.log('changing cubic yd to cubic m.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 0.02832 / 0.03703;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'yd' && current_rect_unit === 'l') {
            //console.log('changing cubic yd to l.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 28.321 / 0.03703;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }

        //l to ft,in,cm,m,yd///////////////////////////////////////////////////////////////////////
        else if (old_rect_unit === 'l' && current_rect_unit === 'ft') {
            //console.log('changing l to cubic ft.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) / 28.321;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'l' && current_rect_unit === 'in') {
            //console.log('changing l to cubic in.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 1728 / 28.321;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'l' && current_rect_unit === 'cm') {
            //console.log('changing l to cubic cm.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 28316.8 / 28.321;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'l' && current_rect_unit === 'm') {
            //console.log('changing l to cubic m.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 0.02832 / 28.321;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
        else if (old_rect_unit === 'l' && current_rect_unit === 'yd') {
            //console.log('changing l to cubic yd.');
            converted_rect_volume = parseFloat($("#rect_volume").val()) * 0.03703 / 28.321;
            //console.log(converted_rect_volume);
            $("#rect_volume").val((converted_rect_volume).toFixed(8));
        }
    });

    $('#circle_volume_unit').on('change', () => {
        old_circle_unit = current_circle_unit;
        current_circle_unit = $('#circle_volume_unit').val();

        //feet to in,cm,m,yd,l///////////////////////////////////////////////////////////////////////
        if(old_circle_unit === 'ft' && current_circle_unit === 'in') {
            //console.log('changing cubic ft to cubic in.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 1728;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        } 
        else if (old_circle_unit === 'ft' && current_circle_unit === 'cm') {
            //console.log('changing cubic ft to cubic cm.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 28316.8;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'ft' && current_circle_unit === 'm') {
            //console.log('changing cubic ft to cubic m.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 0.02832;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'ft' && current_circle_unit === 'yd') {
            //console.log('changing cubic ft to cubic yd.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 0.03703;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'ft' && current_circle_unit === 'l') {
            //console.log('changing cubic ft to cubic l.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 28.321;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        

        //in to ft,cm,m,yd,l///////////////////////////////////////////////////////////////////////
        else if (old_circle_unit === 'in' && current_circle_unit === 'ft') {
            //console.log('changing cubic in to cubic ft.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) / 1728;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'in' && current_circle_unit === 'cm') {
            //console.log('changing cubic in to cubic cm.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 30.48 / 1728  ;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'in' && current_circle_unit === 'm') {
            //console.log('changing cubic in to cubic m.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 0.028321 / 1728  ;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'in' && current_circle_unit === 'yd') {
            //console.log('changing cubic in to cubic yd.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 0.03703 / 1728  ;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'in' && current_circle_unit === 'l') {
            //console.log('changing cubic in to l.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 28.321 / 1728  ;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }


        //cm to in,ft,m,yd,l///////////////////////////////////////////////////////////////////////
        else if (old_circle_unit === 'cm' && current_circle_unit === 'ft') {
            //console.log('changing cubic cm to cubic ft.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) / 28316.8;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'cm' && current_circle_unit === 'in') {
            //console.log('changing cubic cm to cubic in.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 1728 / 28316.8;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'cm' && current_circle_unit === 'm') {
            //console.log('changing cubic cm to cubic m.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 0.028321 / 28316.8;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'cm' && current_circle_unit === 'yd') {
            //console.log('changing cubic cm to cubic yd.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 0.03703 / 28316.8;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'cm' && current_circle_unit === 'l') {
            //console.log('changing cubic cm to l.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 28.321 / 28316.8;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }



        //m to ft,in,cm,yd,l///////////////////////////////////////////////////////////////////////
        else if (old_circle_unit === 'm' && current_circle_unit === 'ft') {
            //console.log('changing cubic m to cubic ft.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) / 0.028321;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'm' && current_circle_unit === 'in') {
            //console.log('changing cubic m to cubic in.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 1728 / 0.028321;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'm' && current_circle_unit === 'cm') {
            //console.log('changing cubic m to cubic cm.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 28316.8 / 0.028321;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'm' && current_circle_unit === 'yd') {
            //console.log('changing cubic m to cubic yd.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 0.03703 / 0.028321;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'm' && current_circle_unit === 'l') {
            //console.log('changing cubic m to l.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 28.321 / 0.028321;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }

        //yd to ft,in,cm,m,l///////////////////////////////////////////////////////////////////////
        else if (old_circle_unit === 'yd' && current_circle_unit === 'ft') {
            //console.log('changing cubic yd to cubic ft.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) / 0.03703;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'yd' && current_circle_unit === 'in') {
            //console.log('changing cubic yd to cubic in.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 1728 / 0.03703;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'yd' && current_circle_unit === 'cm') {
            //console.log('changing cubic yd to cubic cm.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 28316.8 / 0.03703;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'yd' && current_circle_unit === 'm') {
            //console.log('changing cubic yd to cubic m.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 0.02832 / 0.03703;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'yd' && current_circle_unit === 'l') {
            //console.log('changing cubic yd to l.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 28.321 / 0.03703;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }

        //l to ft,in,cm,m,yd///////////////////////////////////////////////////////////////////////
        else if (old_circle_unit === 'l' && current_circle_unit === 'ft') {
            //console.log('changing l to cubic ft.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) / 28.321;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'l' && current_circle_unit === 'in') {
            //console.log('changing l to cubic in.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 1728 / 28.321;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'l' && current_circle_unit === 'cm') {
            //console.log('changing l to cubic cm.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 28316.8 / 28.321;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'l' && current_circle_unit === 'm') {
            //console.log('changing l to cubic m.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 0.02832 / 28.321;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
        else if (old_circle_unit === 'l' && current_circle_unit === 'yd') {
            //console.log('changing l to cubic yd.');
            converted_circle_volume = parseFloat($("#circle_volume").val()) * 0.03703 / 28.321;
            //console.log(converted_circle_volume);
            $("#circle_volume").val((converted_circle_volume).toFixed(8));
        }
    });

});

