<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>اوبس صفحة للادمن فقط اسف</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body{
  display:flex;
  justify-content:center;
  align-items: center;
  height:100vh;
  width:100%;
  background:url('https://i.pinimg.com/originals/09/05/a7/0905a74092fa43fce6218aa48f6a26a4.jpg') no-repeat;
  background-size:cover;
  background-position:center;
  background-color: #66fcf1;
  animation:animateBg 4s linear infinite;
}
@keyframes animateBg {
  100% {
    filter:hue-rotate(360deg);
  }
}
.login-box {
  position: relative;
  width: 400px;
  height: 450px;
  background: transparent;
  border-radius: 15px;
  border: 2px solid rgba(255, 0, 0, 0.349);
  display: flex;
  justify-content: center;
  align-items: center;
  backdrop-filter: blur(15px);
}
h2 {
  font-size:2em;
  color:var(--black-color);
  text-align:center;
}
.input-box {
  position:relative;
  width:310px;
  margin:30px 0;
  border-bottom:1px solid var(--black-color);
}
.input-box label {
  position:absolute;
  top:50%;
  left:5px;
  transform:translateY(-50%);
  font-size:1em;
  color:var(--black-color);
  pointer-events:none;
  transition:.5s;
}
.input-box input:focus  ~ label,
.input-box input:valid  ~ label {
  top:-5px;
}
.input-box input {
  width:100%;
  height:50px;
  background:transparent;
  border:none;
  outline:none;
  font-size:1em;
  color:var(--black-color);
  padding:0 35px 0 5px;
}
.input-box .icon {
  position:absolute;
  right:8px;
  top:50%;
  color: var(--black-color);
  transform: translateY(-50%);
}
.remember-forgot {
  margin:-15px 0 15px;
  font-size:.9em;
  color:var(--black-color);
  display:flex;
  justify-content:space-between;
}
.remember-forgot label input {
  margin-right:3px;
}
.remember-forgot a {
  color:var(--black-color);
  text-decoration:none;
}
.remember-forgot a:hover {
  text-decoration:underline;
}
button {
  width:100%;
  height:40px;
  background-color:#000;
  border:1px dashed aqua;
  border-radius:40px;
  cursor:pointer;
  font-size:1em;
  color:#66fcf1;
  font-weight:500;
}
.register-link {
  font-size:.9em;
  color:var(--black-color);
  text-align:center;
  margin:25px 0 10px;
}
.register-link p a {
  color:var(--black-color);
  text-decoration:none;
  font-weight:600;
}
.register-link p a:hover {
  text-decoration:underline;
}
@media (max-width:500px) {
  .login-box {
    width:100%;
    height:100vh;
    border:none;
    border-radius:0;
  }
  .input-box {
    width:290px;
  }
}
a{
    position: relative;
    background: #fff;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 1.5rem;
    letter-spacing: 0.1em;
    font-weight: 400;
    padding: 10px 30px;
    transition: 0.5s;
}

a:hover{
    background: var(--clr);
    color: var(--clr);
    letter-spacing: 0.25em;
    box-shadow: 0 0 35px var(--clr);
}

a::before{
    content: '';
    position: absolute;
    inset: 2px;
    background: #151F28;
}

a span{
    position: relative;
    z-index: 1;
}

a i{
    position: absolute;
    inset: 0;
    display: block;
}

a i::before{
    content: '';
    position: absolute;
    top: 0;
    left: 80%;
    width: 10px;
    height: 4px;
    background: #151F28;
    transform: translateX(-50%) skewX(325deg);
    transition: 0.5s;
}

a:hover i::before{
    width: 20px;
    left: 20%;
}

a i::after{
    content: '';
    position: absolute;
    bottom: 0;
    left: 20%;
    width: 10px;
    height: 4px;
    background: #151F28;
    transform: translateX(-50%) skewX(325deg);
    transition: 0.5s;
}

a:hover i::after{
    width: 20px;
    left: 80%;
}
</style>
</head>
<body>
<div class="error-message">
        <a href="https://rtvonmod-79.000webhostapp.com" style="--clr:#1e9bff">
            <span>Press here</span><i></i></a>
</div>
</body>
</html>