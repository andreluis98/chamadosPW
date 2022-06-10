<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
        <style>

            #imgbanner {
                max-height: 250px;
            }
            

            .formclass{
                margin-top:100px;
                width:100%;
                display:flex;
                justify-content:center;
                flex-direction:column;
                align-items:center;
            }

            
        </style>
    </head>
    <body>

        <div
            id="carouselExampleControls"
            class="carousel slide"
            data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img
                        src="https://www.milldesk.com.br/wp-content/uploads/2019/03/helpdesk.jpeg"
                        class="d-block w-100 h-10"
                        alt="windows"
                        id="imgbanner">
                </div>
                <div class="carousel-item">
                    <img
                        src="https://images.squarespace-cdn.com/content/v1/556c9bf4e4b0de57cb590a0f/1590764783215-UB10EWE3XAGQWL9182W0/capa+zendesk.png"
                        class="d-block w-100 "
                        alt="Sol"
                        id="imgbanner">
                </div>
                <div class="carousel-item">
                    <img
                        src="https://rockcontent.com/br/wp-content/uploads/sites/2/2019/03/tamanho-imagem-blog.png"
                        class="d-block w-100"
                        alt=","
                        id="imgbanner">
                </div>

            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="formclass">
            <form >
                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input
                        type="email "
                        class="form-control"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check ">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
      
    </body>
</html>