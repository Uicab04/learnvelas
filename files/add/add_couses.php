
<?php
include("../../clases/Conexion.php");

?>
<!DOCTYPE html>
<!-- saved from url=(0081)http://localhost/2/Online_Learning_Management_System/admin/course_form/add_course -->
<html class="translated-ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- all the meta tags -->


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta content="" name="description">
    <meta content="" name="author">
    <!-- all the css files -->
    <!-- third party css -->
    <link href="./add_couses_files/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/responsive.bootstrap4.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/buttons.bootstrap4.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/select.bootstrap4.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/summernote-bs4.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/fullcalendar.min.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/dropzone.css" rel="stylesheet" type="text/css">
    <!-- third party css end -->
    <!-- App css -->
    <link href="./add_couses_files/app.min.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/icons.min.css" rel="stylesheet" type="text/css">

    <link href="./add_couses_files/main.css" rel="stylesheet" type="text/css">

    <!-- font awesome 5 -->
    <link href="./add_couses_files/fontawesome-all.min.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/fontawesome-iconpicker.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./add_couses_files/bootstrap-tagsinput.css">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="./add_couses_files/jquery-3.3.1.min.js.descarga" charset="utf-8"></script>
    <script src="./add_couses_files/onDomChange.js.descarga"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--Alertas-->
    <link href="../../alertifyjs/css/alertify.css" rel="stylesheet">
    <link
        href="c../../c:\laragon\www\E\E\css c:\laragon\www\E\E\css\sb-admin-2.min.cssc:\laragon\www\E\E\css c:\laragon\www\E\E\css\sb-admin-2.min.cssss/sb-admin-2.min.css"
        rel="stylesheet">

    <!--Alertas-->
    <link href="alertifyjs/css/alertify.css" rel="stylesheet">
    <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="./add_couses_files/m=el_main_css">
</head>

<body data-layout="detached">
<div class="untree_co-hero overlay" style="background-image: url('../../LOGOS/bc2.webp');">

    <!-- HEADER -->
    <!-- Topbar Start -->

    <!-- end Topbar -->
    <div class="container-fluid">
        <div class="wrapper">
            <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" class="form-control-file" id="videoS" name="videoS" accept="video/*">
            <input type="submit" value="Upload Video" name="submit">
            </form> -->
            <!-- BEGIN CONTENT -->
            <!-- SIDEBAR -->
            <!-- ========== Left Sidebar Start ========== -->

            <!-- PAGE CONTAINER-->
            <div class="content-page">
                <div class="content">
                    <!-- BEGIN PlACE PAGE CONTENT HERE -->
                    <div class="row4">
                    </div>

                    <div class="row4">
                        <div class="col-xl-12">
                            <div class="card4">
                                <div class="card-body4">

                                    <h4 class="header-title mb-3">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Formulario para agregar videos
                                            </font>
                                        </font><a
                                            href="../../index.php"
                                            class="alignToTitle btn btn-outline-secondary btn-rounded btn-sm"> <i
                                                class=" mdi mdi-keyboard-backspace"></i>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">inicio
                                                </font>
                                            </font>
                                        </a>
                                        <a
                                            href="categorias.php"
                                            class="alignToTitle btn btn-outline-secondary btn-rounded btn-sm"> <i
                                                class=" mdi mdi-keyboard-backspace"></i>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Añadir cursos
                                                </font>
                                            </font>
                                        </a>
                                        <a
                                            href="../../CURSOS_todos.php"
                                            class="alignToTitle btn btn-outline-secondary btn-rounded btn-sm"> <i
                                                class=" mdi mdi-keyboard-backspace"></i>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">ver cursos
                                                </font>
                                            </font>
                                        </a>
                                    </h4>

                                    <div class="row">
                                        <div class="col-xl-12">
                                        <form class="required-form" id="form1"
                                                action="http://localhost/2/Online_Learning_Management_System/admin/course_actions/add"
                                                method="post" enctype="multipart/form-data">
                                                <div id="basicwizard">

                                                    <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                                        <li class="nav-item">
                                                            <a href="#basic" data-toggle="tab"
                                                                class="nav-link rounded-0 pt-2 pb-2 active">
                                                                <i class="mdi mdi-fountain-pen-tip mr-1"></i>
                                                                <span class="d-none d-sm-inline">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Básico
                                                                        </font>
                                                                    </font>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#requirements" data-toggle="tab"
                                                                class="nav-link rounded-0 pt-2 pb-2">
                                                                <i class="mdi mdi-bell-alert mr-1"></i>
                                                                <span class="d-none d-sm-inline">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">
                                                                            Requisitos</font>
                                                                    </font>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <!-- <li class="nav-item">
                                                            <a href="#outcomes" data-toggle="tab"
                                                                class="nav-link rounded-0 pt-2 pb-2">
                                                                <i class="mdi mdi-camera-control mr-1"></i>
                                                                <span class="d-none d-sm-inline">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">
                                                                            Resultados</font>
                                                                    </font>
                                                                </span>
                                                            </a>
                                                        </li> -->
                                                        <!-- <li class="nav-item">
                                                            <a href="#pricing" data-toggle="tab"
                                                                class="nav-link rounded-0 pt-2 pb-2">
                                                                <i class="mdi mdi-currency-cny mr-1"></i>
                                                                <span class="d-none d-sm-inline">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Precios
                                                                        </font>
                                                                    </font>
                                                                </span>
                                                            </a>
                                                        </li> -->
                                                        <!-- <li class="nav-item">
                                                            <a href="#media" data-toggle="tab"
                                                                class="nav-link rounded-0 pt-2 pb-2">
                                                                <i class="mdi mdi-library-video mr-1"></i>
                                                                <span class="d-none d-sm-inline">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Medios de
                                                                            comunicación</font>
                                                                    </font>
                                                                </span>
                                                            </a>
                                                        </li> -->
                                                        <li class="nav-item">
                                                            <a href="#seo" data-toggle="tab"
                                                                class="nav-link rounded-0 pt-2 pb-2">
                                                                <i class="mdi mdi-tag-multiple mr-1"></i>
                                                                <span class="d-none d-sm-inline">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">SEO
                                                                        </font>
                                                                    </font>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#finish" data-toggle="tab"
                                                                class="nav-link rounded-0 pt-2 pb-2">
                                                                <i
                                                                    class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                                                <span class="d-none d-sm-inline">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Finalizar
                                                                        </font>
                                                                    </font>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content b-0 mb-0">
                                                        <div class="tab-pane active" id="basic">
                                                            <div class="row justify-content-center">
                                                                <div class="col-xl-8">
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label"
                                                                            for="nombre">

                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    Título del curso </font>
                                                                            </font><span class="required">
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        *</font>
                                                                                </font>
                                                                            </span>
                                                                        </label>
                                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                                            <input type="text"
                                                                                class="form-control form-control-user"
                                                                                id="nombre" name="nombre"
                                                                                placeholder="nombre">
                                                                        </div>



                                                                        <!-- <input type="text" class="form-control form-control-user" id="course_title" name="course_title" placeholder="Nombre"> -->

                                                                        <!-- <div class="col-md-10">
                                                                            <input type="text" class="form-control"
                                                                                id="nombre" name="nombre"
                                                                                placeholder="Ingrese el título del curso"
                                                                                required="">
                                                                        </div> -->
                                                                    </div>
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label"
                                                                            for="short_description">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    Breve descripción</font>
                                                                            </font>
                                                                        </label>
                                                                        <div class="col-md-10">
                                                                            <textarea name="short_description"
                                                                                id="short_description"
                                                                                class="form-control"></textarea>
                                                                        </div>
                                                                    </div>




                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label"
                                                                            for="description">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    Descripción del curso </font>
                                                                            </font>
                                                                            <span class="required">
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        *</font>
                                                                                </font>
                                                                            </span>
                                                                        </label>
                                                                        <div class="col-md-10">
                                                                            <textarea class="form-control"
                                                                                id="description"
                                                                                name="description"
                                                                                placeholder="Ingrese la descripción del curso"
                                                                                required=""></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <!-- 

                                                                     -->

  


                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="sub_category_id">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">Categoría </font>
                                                                            </font>
                                                                            <span class="required">
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font style="vertical-align: inherit;">*</font>
                                                                                </font>
                                                                            </span>
                                                                        </label>
                                                                        <div class="col-md-10">
                                                                            <?php
                                                                            $db = new Conexion();
                                                                            $menu = $db->query("SELECT * FROM category");

                                                                            // Verificar si se encontraron categorías
                                                                            if ($menu->rowCount() > 0) {
                                                                                echo '<select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="sub_category_id" id="sub_category_id" required="" data-select2-id="sub_category_id" tabindex="-1" aria-hidden="true">';
                                                                                echo '<option value="" data-select2-id="2">';
                                                                                echo '<font style="vertical-align: inherit;">';
                                                                                echo '<font style="vertical-align: inherit;">Seleccione una categoría</font>';
                                                                                echo '</font>';
                                                                                echo '</option>';
                                                                                
                                                                                // Imprimir las categorías principales
                                                                                while ($row = $menu->fetch(PDO::FETCH_ASSOC)) {
                                                                                    if ($row["parent"] == 0) {
                                                                                        echo '<option value="' . $row["id"] . '" disabled>' . $row["name"] . '</option>';
                                                                                        
                                                                                        // Consultar y mostrar las subcategorías
                                                                                        $subcategories = $db->query("SELECT * FROM category WHERE parent = " . $row["id"]);
                                                                                        while ($sub_row = $subcategories->fetch(PDO::FETCH_ASSOC)) {
                                                                                            echo '<option value="' . $sub_row["id"] . '" data-parent="' . $sub_row["parent"] . '">' . $sub_row["name"] . '</option>';                                                                                        }
                                                                                    }
                                                                                }
                                                                                
                                                                                echo '</select>';
                                                                            } else {
                                                                                echo "No se encontraron categorías.";
                                                                            }
                                                                            ?>
                                                                            
                                                                        </div>
                                                                    </div>







                                                                     <!-- 

                                                                      -->


<!-- 

                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label"
                                                                            for="sub_category_id">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    Categoría </font>
                                                                            </font><span class="required">
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        *</font>
                                                                                </font>
                                                                            </span>
                                                                        </label>
                                                                        <div class="col-md-10">
                                                                            <select
                                                                                class="form-control select2 select2-hidden-accessible"
                                                                                data-toggle="select2"
                                                                                name="sub_category_id"
                                                                                id="sub_category_id" required=""
                                                                                data-select2-id="sub_category_id"
                                                                                tabindex="-1" aria-hidden="true">
                                                                                <option value="" data-select2-id="2">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            Seleccione una categoría
                                                                                        </font>
                                                                                    </font>
                                                                                </option>
                                                                                <optgroup label="ddddddddd">
                                                                                    <option value="3">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            <font
                                                                                                style="vertical-align: inherit;">
                                                                                                aaa</font>
                                                                                        </font>
                                                                                    </option>
                                                                                </optgroup>
                                                                            </select><span
                                                                                class="select2 select2-container select2-container--default"
                                                                                dir="ltr" data-select2-id="1"
                                                                                style="width: auto;"><span
                                                                                    class="selection"><span
                                                                                        class="select2-selection select2-selection--single"
                                                                                        role="combobox"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"
                                                                                        tabindex="0"
                                                                                        aria-labelledby="select2-sub_category_id-container"><span
                                                                                            class="select2-selection__rendered"
                                                                                            id="select2-sub_category_id-container"
                                                                                            role="textbox"
                                                                                            aria-readonly="true"
                                                                                            title="Seleccione una categoría">
                                                                                            <font
                                                                                                style="vertical-align: inherit;">
                                                                                                <font
                                                                                                    style="vertical-align: inherit;">
                                                                                                    Seleccione una
                                                                                                    categoría</font>
                                                                                            </font>
                                                                                        </span><span
                                                                                            class="select2-selection__arrow"
                                                                                            role="presentation"><b
                                                                                                role="presentation"></b></span></span></span><span
                                                                                    class="dropdown-wrapper"
                                                                                    aria-hidden="true"></span></span>
                                                                        </div>
                                                                    </div> -->


<!-- 


 -->




                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label" for="level">
                                                                            Nivel
                                                                        </label>
                                                                        <div class="col-md-10">
                                                                            <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="level" id="level" data-select2-id="level" tabindex="-1" aria-hidden="true">
                                                                                <option value="beginner" data-select2-id="4">
                                                                                    Principiante
                                                                                </option>
                                                                                <option value="advanced">
                                                                                    Avanzado
                                                                                </option>
                                                                                <option value="intermediate">
                                                                                    Intermedio
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>


                                                                    
                                                                    <div class="form-group row mb-3">
                                                                    <label class="col-md-2 col-form-label" for="theme_selector">
                                                                        <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Selector de Temas</font>
                                                                        </font>
                                                                    </label>
                                                                    <div class="col-md-10">
                                                                        <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="theme_selector" id="theme_selector" data-select2-id="theme_selector" tabindex="-1" aria-hidden="true">
                                                                        </select>
                                                                    </div>
                                                                    </div>
                                                                    <script>
                                                                    
                                                                    document.addEventListener("DOMContentLoaded", function() {
                                                                        var selectElement = document.getElementById("theme_selector");

                                                                        // Define la función fetchData() para obtener los datos
                                                                        function fetchData(searchTerm, page) {
                                                                            // Simular la obtención de datos (reemplaza esto con tu lógica de obtención de datos real)
                                                                            var itemsPerPage = 25; // Número de elementos por página
                                                                            var data = [];
                                                                            for (var i = (page - 1) * itemsPerPage; i < page * itemsPerPage; i++) {
                                                                                var number = i + 1; // Empezar desde 1
                                                                                if (searchTerm && number.toString().indexOf(searchTerm) === -1) {
                                                                                    continue; // Saltar si no coincide con el término de búsqueda
                                                                                }
                                                                                data.push(number);
                                                                            }
                                                                            return data;
                                                                        }

                                                                        // Llena el desplegable con datos obtenidos de fetchData()
                                                                        function populateSelect() {
                                                                            var data = fetchData('', 1); // Llama a fetchData() sin término de búsqueda y página 1
                                                                            data.forEach(function(option) {
                                                                                var optionElement = document.createElement("option");
                                                                                optionElement.value = option;
                                                                                optionElement.textContent = option;
                                                                                selectElement.appendChild(optionElement);
                                                                            });
                                                                        }

                                                                        // Llama a la función para llenar el desplegable cuando se carga la página
                                                                        populateSelect();
                                                                    });



                                                                    </script>



                                                                    <!-- <div class="form-group row mb-3">
                                                                        <div class="offset-md-2 col-md-10">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    name="is_top_course"
                                                                                    id="is_top_course" value="1">
                                                                                <label class="custom-control-label"
                                                                                    for="is_top_course">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            Compruebe si este curso es
                                                                                            el mejor</font>
                                                                                    </font>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div> -->
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->
                                                        </div> <!-- end tab pane -->

                                                        <div class="tab-pane" id="requirements">
                                                            <div class="row justify-content-center">
                                                                <div class="col-xl-8">
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label"
                                                                            for="requirements">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    Requisitos</font>
                                                                            </font>
                                                                        </label>
                                                                        <div class="col-md-10">
                                                                            <div id="requirement_area">
                                                                                <div class="d-flex mt-2">
                                                                                    <div class="flex-grow-1 px-3">
                                                                                        <div class="form-group">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                name="requirements[]"
                                                                                                id="requirements"
                                                                                                placeholder="Proporcionar requisitos">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="">
                                                                                        <button type="button"
                                                                                            class="btn btn-success btn-sm"
                                                                                            style="" name="button"
                                                                                            onclick="appendRequirement()">
                                                                                            <i class="fa fa-plus">+</i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="blank_requirement_field"
                                                                                    style="display: none;">
                                                                                    <div class="d-flex mt-2">
                                                                                        <div class="flex-grow-1 px-3">
                                                                                            <div class="form-group">
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    name="requirements[]"
                                                                                                    id="requirements"
                                                                                                    placeholder="Proporcionar requisitos">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="">
                                                                                            <button type="button"
                                                                                                class="btn btn-danger btn-sm"
                                                                                                style="margin-top: 0px;"
                                                                                                name="button"
                                                                                                onclick="removeRequirement(this)">
                                                                                                <i
                                                                                                    class="fa fa-minus"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane" id="outcomes">
                                                            <div class="row justify-content-center">
                                                                <div class="col-xl-8">
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label"
                                                                            for="outcomes">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    Resultados</font>
                                                                            </font>
                                                                        </label>
                                                                        <div class="col-md-10">
                                                                            <div id="outcomes_area">
                                                                                <div class="d-flex mt-2">
                                                                                    <div class="flex-grow-1 px-3">
                                                                                        <div class="form-group">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                name="outcomes[]"
                                                                                                id="outcomes"
                                                                                                placeholder="Proporcionar resultados">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="">
                                                                                        <button type="button"
                                                                                            class="btn btn-success btn-sm"
                                                                                            name="button"
                                                                                            onclick="appendOutcome()">
                                                                                            <i class="fa fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="blank_outcome_field"
                                                                                    style="display: none;">
                                                                                    <div class="d-flex mt-2">
                                                                                        <div class="flex-grow-1 px-3">
                                                                                            <div class="form-group">
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    name="outcomes[]"
                                                                                                    id="outcomes"
                                                                                                    placeholder="Proporcionar resultados">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="">
                                                                                            <button type="button"
                                                                                                class="btn btn-danger btn-sm"
                                                                                                style="margin-top: 0px;"
                                                                                                name="button"
                                                                                                onclick="removeOutcome(this)">
                                                                                                <i
                                                                                                    class="fa fa-minus"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane" id="pricing">
                                                            <div class="row justify-content-center">
                                                                <div class="col-xl-8">
                                                                    <div class="form-group row mb-3">
                                                                        <div class="offset-md-2 col-md-10">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    name="is_free_course"
                                                                                    id="is_free_course" value="1">
                                                                                <label class="custom-control-label"
                                                                                    for="is_free_course">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            Compruebe si este es un
                                                                                            curso gratuito</font>
                                                                                    </font>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label"
                                                                            for="price">Course Price ($)</label>
                                                                        <div class="col-md-10">
                                                                            <input type="number" class="form-control"
                                                                                id="price" name="price"
                                                                                placeholder="Enter Course Course Price"
                                                                                min="0">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row mb-3">
                                                                        <div class="offset-md-2 col-md-10">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    name="discount_flag"
                                                                                    id="discount_flag" value="1">
                                                                                <label class="custom-control-label"
                                                                                    for="discount_flag">Check If This
                                                                                    Course Has Discount</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label"
                                                                            for="discounted_price">Discounted Price
                                                                            ($)</label>
                                                                        <div class="col-md-10">
                                                                            <input type="number" class="form-control"
                                                                                name="discounted_price"
                                                                                id="discounted_price"
                                                                                onkeyup="calculateDiscountPercentage(this.value)"
                                                                                min="0">
                                                                            <small class="text-muted">This Course Has
                                                                                <span id="discounted_percentage"
                                                                                    class="text-danger">0%</span>
                                                                                Discount</small>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->
                                                        </div> <!-- end tab-pane -->
                                                        <div class="tab-pane" id="media">
                                                            <div class="row justify-content-center">

                                                                <div class="col-xl-8">
                                                                    <div class="form-group row mb-3">
                                                                        <!--  -->
                                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                                                <!-- Topbar Start -->
                                                                            

                                                                            
                                                                            

    
</div>




                                                                        <!-- 


                                                                         -->
                                                                        <!-- 


 -->







                                                                        <!-- 

                                                                     -->
                                                                        <label class="col-md-2 col-form-label"
                                                                            for="course_overview_provider">Course
                                                                            Overview Provider</label>
                                                                        <div class="col-md-10">
                                                                            <select
                                                                                class="form-control select2 select2-hidden-accessible"
                                                                                data-toggle="select2"
                                                                                name="course_overview_provider"
                                                                                id="course_overview_provider"
                                                                                data-select2-id="course_overview_provider"
                                                                                tabindex="-1" aria-hidden="true">
                                                                                <option value="youtube"
                                                                                    data-select2-id="8">Youtube</option>
                                                                                <option value="vimeo">Vimeo</option>
                                                                                <option value="html5">Html5</option>
                                                                            </select><span
                                                                                class="select2 select2-container select2-container--default"
                                                                                dir="ltr" data-select2-id="7"
                                                                                style="width: auto;"><span
                                                                                    class="selection"><span
                                                                                        class="select2-selection select2-selection--single"
                                                                                        role="combobox"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"
                                                                                        tabindex="0"
                                                                                        aria-labelledby="select2-course_overview_provider-container"><span
                                                                                            class="select2-selection__rendered"
                                                                                            id="select2-course_overview_provider-container"
                                                                                            role="textbox"
                                                                                            aria-readonly="true"
                                                                                            title="Youtube">Youtube</span><span
                                                                                            class="select2-selection__arrow"
                                                                                            role="presentation"><b
                                                                                                role="presentation"></b></span></span></span><span
                                                                                    class="dropdown-wrapper"
                                                                                    aria-hidden="true"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->

                                                                <div class="col-xl-8">
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label"
                                                                            for="course_overview_url">Course Overview
                                                                            Url</label>
                                                                        <div class="col-md-10">
                                                                            <input type="text" class="form-control"
                                                                                name="course_overview_url"
                                                                                id="course_overview_url"
                                                                                placeholder="E.g: https://www.youtube.com/watch?v=oBtf8Yglw2w">
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->

                                                                <div class="col-xl-8">
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label"
                                                                            for="course_thumbnail_label">Course
                                                                            Thumbnail</label>
                                                                        <div class="col-md-10">
                                                                            <div class="wrapper-image-preview"
                                                                                style="margin-left: -6px;">
                                                                                <div class="box" style="width: 250px;">
                                                                                    <div class="js--image-preview"
                                                                                        style="background-image: url(http://localhost/2/Online_Learning_Management_System/uploads/thumbnails/course_thumbnails/course-thumbnail.png); background-color: #F5F5F5;">
                                                                                    </div>
                                                                                    <div class="upload-options">
                                                                                        <label for="course_thumbnail"
                                                                                            class="btn"> <i
                                                                                                class="mdi mdi-camera"></i>
                                                                                            Course Thumbnail <br>
                                                                                            <small>(600 X 600)</small>
                                                                                        </label>
                                                                                        <input id="course_thumbnail"
                                                                                            style="visibility:hidden;"
                                                                                            type="file"
                                                                                            class="image-upload"
                                                                                            name="course_thumbnail"
                                                                                            accept="image/*">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->
                                                        </div>
                                                        <div class="tab-pane" id="seo">
                                                            <div class="row justify-content-center">
                                                                <div class="col-xl-8">
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label"
                                                                            for="website_keywords">Meta Keywords</label>
                                                                        <div class="col-md-10">
                                                                            <input type="text"
                                                                                class="form-control bootstrap-tag-input"
                                                                                id="meta_keywords" name="meta_keywords"
                                                                                data-role="tagsinput"
                                                                                style="width: 100%; display: none;">
                                                                            <div class="bootstrap-tagsinput"><input
                                                                                    size="1" type="text" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                                <div class="col-xl-8">
                                                                    <div class="form-group row mb-3">
                                                                        <label class="col-md-2 col-form-label"
                                                                            for="meta_description">Meta
                                                                            Description</label>
                                                                        <div class="col-md-10">
                                                                            <textarea name="meta_description"
                                                                                class="form-control"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->
                                                        </div>

                                                        <div class="tab-pane" id="finish">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="text-center">
                                                                        <h2 class="mt-0"><i
                                                                                class="mdi mdi-check-all"></i></h2>
                                                                        <h3 class="mt-0">Sube el vieo</h3>

                                                                        <p class="w-75 mb-2 mx-auto">Estas a solo un click</p>

                                                                        <div class="mb-3 mt-3">
                                                                            <button type="button"
                                                                                class="btn btn-primary text-center"
                                                                                onclick="camposAgregarCursos()" style="display: none;">Submit</button>
                                                                            <hr>



                                            </form>


                                        </div>


<!-- Contenido previo del formulario -->

                                        <style>
                                            /* Estilos para centrar el formulario */
                                            #form2-container {
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                                flex-direction: column;
                                                text-align: center;
                                                margin-bottom: 20px; /* Espacio entre el formulario y el botón */
                                            }

                                            /* Estilos para el botón */
                                            #submitForm2-btn {
                                                margin-top: 10px; /* Espacio entre el formulario y el botón */
                                            }
                                        </style>

                                        <div id="form2-container">
                                            <form id="form2" action="upload.php" method="post" enctype="multipart/form-data">
                                                <!-- Contenido del formulario 2 -->
                                                <label for="videoS" class="form-label">Subir Video:</label>
                                                <input type="file" class="form-control-file" id="videoS" name="videoS" accept="video/*">
                                                <!-- <input type="submit" value="Upload Video" name="uploadButton" style="display: none;"> --> <!-- Botón de envío oculto -->
                                            </form>
                                            
                                            <!-- Botón para enviar el formulario -->
                                            <input type="button" value="Subir Video" onclick="submitForm2()" id="submitForm2-btn" class="btn btn-primary btn-user btn-block" style="display: none;">
                                        </div>



                                            <form id="form3" action="upload_imagenes.php" method="post" enctype="multipart/form-data">
                                                <!-- Contenido del formulario 3 -->
                                                <div class="form-group" id="thumbnail-picker-area">
                                                    <label>Miniatura de categoría <small>solo admite formato imagen</small></label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="category_thumbnail" name="category_thumbnail" accept="image/*">
                                                            <label class="custom-file-label" for="category_thumbnail">Elija miniatura</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="submit" value="Cargar Imagen" name="uploadButton" style="display: none;"> <!-- Ocultar el botón de envío -->
                                            </form>

                                            <input type="button" value="Submit" onclick="submitForm3()" class="btn btn-primary btn-user btn-block" style="display: none;">
                                            <hr>
                                            
                                         
<div class="mb-3 mt-3">
    <button type="button" class="btn btn-primary text-center" onclick="submitAllForms()">Guardar</button>
    <hr>
</div>
<script>
    let nombreImagen = '';

    function submitAllForms() {
        submitForm1();
        submitForm2();
        // submitForm3();
        // camposAgregarCursos(nombreVideo, nombreImagen);

    }

    function submitForm1() {
        const formData1 = new FormData(document.getElementById("form1"));
        fetch('', {
            method: 'POST',
            body: formData1
        })
        .then(response => {
            if (response.ok) {
                return response.text();
            }
            throw new Error('Error en la respuesta del servidor');
        })
        .then(data => {
            // console.log('Respuesta del servidor del formulario 1:', data);
            // Aquí puedes manejar la respuesta del servidor si es necesario
        })
        .catch(error => {
            console.error('Error en el formulario 1:', error);
        });
    }

    function submitForm2() {
        const formData2 = new FormData(document.getElementById("form2"));
        fetch('upload.php', {
            method: 'POST',
            body: formData2
        })
        .then(response => {
            if (response.ok) {
                return response.text();
            }
            throw new Error('Error en la respuesta del servidor');
        })
        .then(data => {
            // console.log('Respuesta del servidor del formulario 2:', data);
            // Llamar a camposAgregarCursos después de enviar el formulario
            // camposAgregarCursos(data, '');
            nombreVideo = data; // Guardar el nombre del video en una variable global
            submitForm3();

        })
        .catch(error => {
            console.error('Error en el formulario 2:', error);
        });
    }

   

    function submitForm3() {
        const formData3 = new FormData(document.getElementById("form3"));
        const category_thumbnail = document.getElementById("category_thumbnail").files[0];
        formData3.append("category_thumbnail", category_thumbnail);
        fetch('upload_imagenesCursos.php', {
            method: 'POST',
            body: formData3
        })
        .then(response => {
            if (response.ok) {
                return response.text();
            }
            throw new Error('Error en la respuesta del servidor');
        })
        .then(data => {
            // console.log('Respuesta del servidor del formulario 3:', data);
            // Llamar a camposAgregarCursos después de enviar el formulario
            // camposAgregarCursos('', data);
            nombreImagen = data; // Guardar el nombre de la imagen en una variable global
            // aqui mando todo lo del formulario principal:
            camposAgregarCursos(nombreVideo, nombreImagen);


        })
        .catch(error => {
            console.error('Error en el formulario 3:', error);
        });
    }
    // function camposAgregarCursos(nombreVideo, nombreImagen) {
    //     // Lógica para guardar en la base de datos
    //     // Asegúrate de que esta función se llame una sola vez después de enviar los tres formularios
    // }
                                            </script>

                                            <!-- <script>
                                            function camposAgregarCursos() {
                                                // Obtener datos del primer formulario
                                                const formData1 = new FormData(document.getElementById("form1"));

                                                // Aquí puedes realizar cualquier validación adicional si es necesario

                                                // Enviar el formulario de forma asíncrona
                                                fetch('script.php', {
                                                    method: 'POST',
                                                    body: formData1
                                                })
                                                .then(response => {
                                                    if (response.ok) {
                                                        return response.text();
                                                    }
                                                    throw new Error('Error en la respuesta del servidor');
                                                })
                                                .then(data => {
                                                    console.log('Respuesta del servidor:', data);
                                                    // Aquí puedes manejar la respuesta del servidor si es necesario
                                                })
                                                .catch(error => {
                                                    console.error('Error:', error);
                                                });
                                            }

                                            function submitForm2() {
                                                // Obtener datos del formulario
                                                const formData2 = new FormData(document.getElementById("form2"));

                                                // Enviar el formulario de forma asíncrona
                                                fetch('upload.php', {
                                                    method: 'POST',
                                                    body: formData2
                                                })
                                                .then(response => {
                                                    if (response.ok) {
                                                        return response.text();
                                                    }
                                                    throw new Error('Error en la respuesta del servidor');
                                                })
                                                .then(data => {
                                                    // Lógica después de enviar el formulario
                                                    camposAgregarCursos(data); // Enviar el nombre del video como argumento
                                                })
                                                .catch(error => {
                                                    console.error('Error:', error);
                                                });
                                            }

                                            function submitForm3() {
                                                // Obtener datos del formulario 3 y el nombre del archivo de imagen
                                                const formData3 = new FormData(document.getElementById("form3"));
                                                const category_thumbnail = document.getElementById("category_thumbnail").files[0];

                                                // Agregar el nombre del archivo de imagen al FormData del formulario
                                                formData3.append("category_thumbnail", category_thumbnail);

                                                // Enviar el formulario de forma asíncrona
                                                fetch('upload_imagenes.php', {
                                                    method: 'POST',
                                                    body: formData3
                                                })
                                                .then(response => {
                                                    if (response.ok) {
                                                        return response.text();
                                                    }
                                                    throw new Error('Error en la respuesta del servidor');
                                                })
                                                .then(data => {
                                                    // Lógica después de enviar el formulario
                                                    console.log('Respuesta del servidor:', data);
                                                    // Extraer el nombre del archivo de la respuesta
                                                    const nombreArchivo = data.trim();
                                                    // Llamar a la función camposAgregarCursos con el nombre del archivo como argumento
                                                    camposAgregarCursos(nombreArchivo);
                                                })
                                                .catch(error => {
                                                    console.error('Error:', error);
                                                });
                                            }
                                        </script> -->











<!-- 
<script>
function submitForm2() {
    // Obtener datos del formulario
    const formData = new FormData(document.getElementById("form2"));

    // Enviar el formulario de forma asíncrona
    fetch('upload.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (response.ok) {
            return response.text();
        }
        throw new Error('Error en la respuesta del servidor');
    })
    .then(data => {
        // Lógica después de enviar el formulario
        camposAgregarCursos(data); // Enviar el nombre del video como argumento
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

// Función para enviar el nombre del video como argumento a camposAgregarCursos()

</script> -->

<!-- Contenido posterior del formulario -->




                                    </div>
                                    <div id="registrandoCurso"></div>
                                    <hr>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                        <ul class="list-inline mb-0 wizard text-center">
                            <li class="previous list-inline-item disabled">
                                <button class="btn btn-info" onclick="goToPreviousTab();"> <i
                                        class="mdi mdi-arrow-left-bold"></i> </button>
                            </li>
                            <li class="next list-inline-item">
                                <button class="btn btn-info" onclick="storeFormData(); goToNextTab();"> <i
                                        class="mdi mdi-arrow-right-bold"></i> </button>
                            </li>
                        </ul>



                      



                       


                    </div> <!-- tab-content -->
                </div> <!-- end #progressbarwizard-->
                </form>
            </div>
        </div><!-- end row-->
    </div> <!-- end card-body-->
    </div> <!-- end card-->
    </div>
    </div>







    <!-- 


 -->






    <!-- 



 -->

    <script type="text/javascript">
        $(document).ready(function () {
            initSummerNote(['#description']);
        });
    </script>

    <script type="text/javascript">
        var blank_outcome = jQuery('#blank_outcome_field').html();
        var blank_requirement = jQuery('#blank_requirement_field').html();
        jQuery(document).ready(function () {
            jQuery('#blank_outcome_field').hide();
            jQuery('#blank_requirement_field').hide();
        });
        function appendOutcome() {
            jQuery('#outcomes_area').append(blank_outcome);
        }
        function removeOutcome(outcomeElem) {
            jQuery(outcomeElem).parent().parent().remove();
        }

        function appendRequirement() {
            jQuery('#requirement_area').append(blank_requirement);
        }
        function removeRequirement(requirementElem) {
            jQuery(requirementElem).parent().parent().remove();
        }

        function priceChecked(elem) {
            if (jQuery('#discountCheckbox').is(':checked')) {

                jQuery('#discountCheckbox').prop("checked", false);
            } else {

                jQuery('#discountCheckbox').prop("checked", true);
            }
        }

        function topCourseChecked(elem) {
            if (jQuery('#isTopCourseCheckbox').is(':checked')) {

                jQuery('#isTopCourseCheckbox').prop("checked", false);
            } else {

                jQuery('#isTopCourseCheckbox').prop("checked", true);
            }
        }

        function isFreeCourseChecked(elem) {

            if (jQuery('#' + elem.id).is(':checked')) {
                $('#price').prop('required', false);
            } else {
                $('#price').prop('required', true);
            }
        }

        function calculateDiscountPercentage(discounted_price) {
            if (discounted_price > 0) {
                var actualPrice = jQuery('#price').val();
                if (actualPrice > 0) {
                    var reducedPrice = actualPrice - discounted_price;
                    var discountedPercentage = (reducedPrice / actualPrice) * 100;
                    if (discountedPercentage > 0) {
                        jQuery('#discounted_percentage').text(discountedPercentage.toFixed(2) + '%');

                    } else {
                        jQuery('#discounted_percentage').text('0%');
                    }
                }
            }
        }
    </script>

    <style media="screen">
        body {
            overflow-x: hidden;
        }
    </style>
    <!-- END PLACE PAGE CONTENT HERE -->
    </div>
    </div>
    <!-- END CONTENT -->
    </div>
    </div>
    <!-- all the js files -->
    <!-- bundle -->
    <script src="./add_couses_files/app.min.js.descarga"></script>
    <!-- third party js -->
    <script src="./add_couses_files/Chart.bundle.min.js.descarga"></script>
    <script src="./add_couses_files/jquery-jvectormap-1.2.2.min.js.descarga"></script>
    <script src="./add_couses_files/jquery-jvectormap-world-mill-en.js.descarga"></script>
    <script src="./add_couses_files/jquery.dataTables.min.js.descarga"></script>
    <script src="./add_couses_files/dataTables.bootstrap4.js.descarga"></script>
    <script src="./add_couses_files/dataTables.responsive.min.js.descarga"></script>
    <script src="./add_couses_files/responsive.bootstrap4.min.js.descarga"></script>
    <script src="./add_couses_files/dataTables.buttons.min.js.descarga"></script>
    <script src="./add_couses_files/buttons.bootstrap4.min.js.descarga"></script>
    <script src="./add_couses_files/buttons.html5.min.js.descarga"></script>
    <script src="./add_couses_files/buttons.flash.min.js.descarga"></script>
    <script src="./add_couses_files/buttons.print.min.js.descarga"></script>
    <script src="./add_couses_files/dataTables.keyTable.min.js.descarga"></script>
    <script src="./add_couses_files/dataTables.select.min.js.descarga"></script>
    <script src="./add_couses_files/summernote-bs4.min.js.descarga"></script>
    <script src="./add_couses_files/fullcalendar.min.js.descarga"></script>
    <script src="./add_couses_files/demo.summernote.js.descarga"></script>
    <script src="./add_couses_files/dropzone.js.descarga"></script>
    <script src="./add_couses_files/demo.dashboard.js.descarga"></script>
    <script src="./add_couses_files/datatable-initializer.js.descarga"></script>
    <script src="./add_couses_files/fontawesome-iconpicker.min.js.descarga" charset="utf-8"></script>
    <script src="./add_couses_files/bootstrap-tagsinput.min.js.descarga" charset="utf-8"></script>
    <script src="./add_couses_files/bootstrap-tagsinput.min(1).js.descarga"></script>
    <script src="./add_couses_files/dropzone.min.js.descarga" charset="utf-8"></script>
    <script src="./add_couses_files/component.fileupload.js.descarga" charset="utf-8"></script>
    <script src="./add_couses_files/demo.form-wizard.js.descarga"></script>
    <!-- dragula js-->
    <script src="./add_couses_files/dragula.min.js.descarga"></script>
    <!-- component js -->
    <script src="./add_couses_files/component.dragula.js.descarga"></script>

    <script src="./add_couses_files/custom.js.descarga"></script>

    <!-- Dashboard chart's data is coming from this file -->

    <script type="text/javascript">
        ! function (o) {
            "use strict";
            var t = function () {
                this.$body = o("body"), this.charts = []
            };
            t.prototype.respChart = function (r, a, n, e) {
                Chart.defaults.global.defaultFontColor = "#8391a2", Chart.defaults.scale.gridLines.color = "#8391a2";
                var i = r.get(0).getContext("2d"),
                    s = o(r).parent();
                return function () {
                    var t;
                    switch (r.attr("width", o(s).width()), a) {
                        case "Line":
                            t = new Chart(i, {
                                type: "line",
                                data: n,
                                options: e
                            });
                            break;
                        case "Doughnut":
                            t = new Chart(i, {
                                type: "doughnut",
                                data: n,
                                options: e
                            })
                    }
                    return t
                }()
            }, t.prototype.initCharts = function () {
                var t = [];
                if (0 < o("#task-area-chart").length) {
                    t.push(this.respChart(o("#task-area-chart"), "Line", {
                        labels: [
                            "January",
                            "February",
                            "March",
                            "April",
                            "May",
                            "June",
                            "July",
                            "August",
                            "September",
                            "October",
                            "November",
                            "December",
                        ],
                        datasets: [{
                            label: "This Year",
                            backgroundColor: "rgba(114, 124, 245, 0.3)",
                            borderColor: "#727cf5",
                            data: [
                                "0",
                                "0",
                                "0",
                                "0",
                                "0",
                                "0",
                                "0",
                                "0",
                                "0",
                                "0",
                                "0",
                                "0",
                            ]
                        }]
                    }, {
                        maintainAspectRatio: !1,
                        legend: {
                            display: !1
                        },
                        tooltips: {
                            intersect: !1
                        },
                        hover: {
                            intersect: !0
                        },
                        plugins: {
                            filler: {
                                propagate: !1
                            }
                        },
                        scales: {
                            xAxes: [{
                                reverse: !0,
                                gridLines: {
                                    color: "rgba(0,0,0,0.05)"
                                }
                            }],
                            yAxes: [{
                                ticks: {
                                    stepSize: 10,
                                    display: !1
                                },
                                min: 10,
                                max: 100,
                                display: !0,
                                borderDash: [5, 5],
                                gridLines: {
                                    color: "rgba(0,0,0,0)",
                                    fontColor: "#fff"
                                }
                            }]
                        }
                    }))
                }
                if (0 < o("#project-status-chart").length) {
                    t.push(this.respChart(o("#project-status-chart"), "Doughnut", {
                        labels: ["Active Course", "Pending Course"],
                        datasets: [{
                            data: [2, 0],
                            backgroundColor: ["#0acf97", "#FFC107"],
                            borderColor: "transparent",
                            borderWidth: "2"
                        }]
                    }, {
                        maintainAspectRatio: !1,
                        cutoutPercentage: 80,
                        legend: {
                            display: !1
                        }
                    }))
                }
                return t
            }, t.prototype.init = function () {
                var r = this;
                Chart.defaults.global.defaultFontFamily = '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif', r.charts = this.initCharts(), o(window).on("resize", function (t) {
                    o.each(r.charts, function (t, r) {
                        try {
                            r.destroy()
                        } catch (t) { }
                    }), r.charts = r.initCharts()
                })
            }, o.ChartJs = new t, o.ChartJs.Constructor = t
        }(window.jQuery),
            function (t) {
                "use strict";
                window.jQuery.ChartJs.init()
            }();

    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(function () {
                $('.icon-picker').iconpicker();
            });
        });
    </script>

    <!-- Toastr and alert notifications scripts -->
    <script type="text/javascript">
        function notify(message) {
            $.NotificationApp.send("Heads Up!", message, "top-right", "rgba(0,0,0,0.2)", "info");
        }

        function success_notify(message) {
            $.NotificationApp.send("Congratulations!", message, "top-right", "rgba(0,0,0,0.2)", "success");
        }

        function error_notify(message) {
            $.NotificationApp.send("Oh Snap!", message, "top-right", "rgba(0,0,0,0.2)", "error");
        }

        function error_required_field() {
            $.NotificationApp.send("Oh Snap!", "Please Fill All The Required Fields", "top-right", "rgba(0,0,0,0.2)", "error");
        }
    </script>


    <script type="text/javascript">
        $.NotificationApp.send("Oh Snap!", 'Invalid Login Credentials', "top-right", "rgba(0,0,0,0.2)", "error");
    </script>

    <script type="text/javascript">
        $.NotificationApp.send("Congratulations!", 'Welcom admin admin', "top-right", "rgba(0,0,0,0.2)", "success");
    </script>
    <div class="jq-toast-wrap top-right">
        <div class="jq-toast-single jq-has-icon jq-icon-success" style="text-align: left; display: none;"><span
                class="jq-toast-loader jq-toast-loaded"
                style="-webkit-transition: width 2.6s ease-in;                       -o-transition: width 2.6s ease-in;                       transition: width 2.6s ease-in;                       background-color: rgba(0,0,0,0.2);"></span><span
                class="close-jq-toast-single">×</span>
            <h2 class="jq-toast-heading">Congratulations!</h2>Welcom admin admin
        </div>
    </div>
    <script type="text/javascript">
        function showAjaxModal(url, header) {
            // SHOWING AJAX PRELOADER IMAGE
            jQuery('#scrollable-modal .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="http://localhost/2/Online_Learning_Management_System/assets/global/bg-pattern-light.svg" /></div>');
            jQuery('#scrollable-modal .modal-title').html('...');
            // LOADING THE AJAX MODAL
            jQuery('#scrollable-modal').modal('show', { backdrop: 'true' });

            // SHOW AJAX RESPONSE ON REQUEST SUCCESS
            $.ajax({
                url: url,
                success: function (response) {
                    jQuery('#scrollable-modal .modal-body').html(response);
                    jQuery('#scrollable-modal .modal-title').html(header);
                }
            });
        }
        function showLargeModal(url, header) {
            // SHOWING AJAX PRELOADER IMAGE
            jQuery('#large-modal .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="http://localhost/2/Online_Learning_Management_System/assets/global/bg-pattern-light.svg" height = "50px" /></div>');
            jQuery('#large-modal .modal-title').html('...');
            // LOADING THE AJAX MODAL
            jQuery('#large-modal').modal('show', { backdrop: 'true' });

            // SHOW AJAX RESPONSE ON REQUEST SUCCESS
            $.ajax({
                url: url,
                success: function (response) {
                    jQuery('#large-modal .modal-body').html(response);
                    jQuery('#large-modal .modal-title').html(header);
                }
            });
        }
    </script>

    <!-- (Large Modal)-->
    <div class="modal fade" id="large-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    ...
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <!-- Scrollable modal -->
    <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="scrollableModalTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body ml-2 mr-2">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <script type="text/javascript">
        function confirm_modal(delete_url) {
            jQuery('#alert-modal').modal('show', { backdrop: 'static' });
            document.getElementById('update_link').setAttribute('href', delete_url);
        }
    </script>

    <!-- Info Alert Modal -->
    <div id="alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="text-center">
                        <i class="dripicons-information h1 text-info"></i>
                        <h4 class="mt-2">Heads Up!</h4>
                        <p class="mt-3">Are You Sure?</p>
                        <button type="button" class="btn btn-info my-2" data-dismiss="modal">Cancel</button>
                        <a href="add_course#" id="update_link" class="btn btn-danger my-2">Continue</a>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- 


 -->




    <script src="../../scripts/ajaxU.js"></script>
    <script src="../../scripts/validacionCursos.js"></script>
    <script src="../../alertifyjs/alertify.min.js"></script>


</body>

</html>