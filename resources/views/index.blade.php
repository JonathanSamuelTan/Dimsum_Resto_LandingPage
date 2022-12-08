<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <title>Document</title>
</head>
<body>
    <!--Navbar-->
   <nav class = "Navbar">
        <a href="#title">Home</a>
        <a href="#abt-title">About</a>
        <a href="#menu-title">Menu</a>
        <a href="#contac-title">Contac Us</a>
   </nav>

   <!--Home-->
   <div class="home">
        <div id="title">
            <h1><b>Come and Taste Our Dimsum</b></h1>
        </div>
        <div id="desc">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab delectus eveniet est? Natus, ipsum. Magnam ullam accusantium aperiam? Veniam, architecto!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, soluta esse. Obcaecati itaque molestias fuga maiores ducimus omnis quae in adipisci eius delectus fugit, dolorum doloremque odit reiciendis totam quo!</p>
        </div>
   </div>

    <!--About-->
    <div class="about">
        <div id="abt-title">
            <h1><b>About Us</b></h1>
        </div>
        <div id="abt-content">
            <div id="abt-img"></div>
            <div id="abt-desc">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum architecto explicabo velit accusamus reiciendis maxime veritatis, sunt dignissimos eos soluta.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae debitis similique a nisi voluptatum tenetur explicabo non illo soluta ducimus eius, commodi possimus pariatur incidunt quo ipsa molestiae eos omnis.</p>
                <button id="abt-btn">See Our Menu</button>
            </div>
        </div>
    </div>

    <!--Menu-->
    <div class="menu">
        <div id="menu-title">
            <h1>Our Menu</h1>
        </div>
        <div id="menu-list">
            <div id="menu1">
                <div id="menu1-img"></div>
                <div id="menu1-desc">
                    <p>Steamed Shrimp <br>Dumpling</p>
                    <h3>Rp27.900</h3>
                </div>
                <button class="menu-btn">Order Now</button>
            </div>
            <div id="menu2">
                <div id="menu2-img"></div>
                <div id="menu2-desc">
                    <p>Shrimp and Mushroom Dumpling</p>
                    <h3 id="price">Rp27.900</h3>
                </div>
                <button class="menu-btn">Order Now</button>
            </div>
            <div id="menu3">
                <div id="menu3-img"></div>
                <div id="menu3-desc">
                    <p>Steamed Shrimp Dumpling with Shimeli Mushroom</p>
                    <h3>Rp27.900</h3>
                </div>
                <button class="menu-btn">Order Now</button>
            </div>
            <div id="menu4">
            <div id="menu4-img"></div>
                <div id="menu4-desc">
                    <p>Wonton<br></p>
                    <h3>Rp27.900</h3>
                </div>
                <button class="menu-btn">Order Now</button>
            </div>
        </div>
    </div>
    
    <!--Contac Us-->
    <div class="contac">
        <div id="contac-title">Contac Us</div>
        <form action="">
            <div id="Name">
                <label for="name">Name</label>
                <br>
                <input id="name"type="text"> 
            </div>

            <div id="Email">
                <label for="email">Email</label>
                <br>
                <input id="email"type="email">
            </div>
            
            <div id="Phone">
                <label for="phone">Phone Number</label>
                <br>
                <input type="text" id="phone">
            </div>

            <div id="Message">
            <label for="name">Message</label>
                <br>
                <input id="message"type="text"> 
                <br>
            </div>
            <button class="contac-btn">Send</button>
        </form>
    </div>

</body>
</html>