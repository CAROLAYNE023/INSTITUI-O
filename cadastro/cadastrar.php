*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: "Archivo Black", serif;
    font-size: 16px;
    font-size: 16px;
    font-weight: 300;
    background-color: #33a1bd;
}

.menu-header{
    color:aliceblue;
    display: flex;
    justify-content: center;
    align-items: center;
}

.menu-nav ul{
    display: flex;
    justify-content: center;
    align-items: center;
}
.menu-nav ul li{
    list-style: none;
    padding: 50px 0 0 5px;
    margin: 20px 0;
}

.menu-nav ul li a{
    text-decoration: none;
    background-color: #000000;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
}
.btn-cad{
    padding: 10px;
    background-color: aqua;
    /* border 2px solid #132a13; */
    border-radius: 5px;
    cursor: pointer;
    width: 10%;
    margin-top: 15px;
    outline: none;
    border: none;
    justify-content: center;
    margin: auto;
}

.btn-cad:haver{
    background-color: blueviolet;
    border: 2px solid #132a13;
    transition: all 0.3s ease-in-out;
}

.h1{
    color: #ffffff;
    align-items: center;
    text-align: center;
}
h2{
    color: #ffffff;
    align-items: center;
    text-align: center;
}

.cadastro{
    border-radius: 10px;
    background-color: #ec0d75;
    height: 500px;
    width: 500px;
    margin: 0 auto;
    color: white;
}

.cadastro form{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.cadastro form > input{
    width: 60%;
    padding: 7px;
    outline: none;
    border: none;
    background-color: #000000;
    color: white;
    align-items: center;
    justify-content: center;
}

.cadastro form > label{
    margin: 10px 0;
}