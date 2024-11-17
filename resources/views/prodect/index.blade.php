@extends('laye.layout')
@section('name')
<style>
.container{
    width: 100%;
  margin-top: 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    
}

.text{
    width: 40%;
    margin-right: 10px;
}
.text h3{
    font-size: 28px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.text h2{
    margin: 10px 0px;
    font-size: 30px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight:bolder;
    color: darkturquoise;

}
.text p{
    font-size: 22px;
    font-weight: 600;
    line-height: 3rem;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: gray;
}
.image{
    width: 35%;
    background-color: darkturquoise;
    height: 30rem;
    border-radius: 30px 98px;
    background-image: url('.././image/Picsart_24-11-03_20-39-21-461');
    animation-name: x;
    animation-delay: 2s;
    animation-duration: 8s;
    animation-iteration-count: infinite;
}
@keyframes x {
    20%{background-image: url('.././image/Picsart_24-11-03_20-39-21-461');}
    40%{background-image: url('.././image/Picsart_24-11-05_00-57-31-535.png');}
    60%{background-image: url('.././image/Picsart_24-11-05_00-57-31-535');}
    80%{background-image: url('.././image/Picsart_24-11-04_02-07-01-629.png');}
    100%{background-image: url('.././image/Picsart_24-11-03_20-39-21-461.png');}
}
.hero{
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    margin-top: 100px;
    
}
.hero .hero1{
    width: 22rem;
    box-shadow: 10px 5px 10px;
    height: 22rem;
    text-align: center;
}

.hero1:hover{
    box-shadow: 4px 3px 16px;
}
.hero .hero2{
    width: 22rem;
    height: 22rem;
    text-align: center;
    box-shadow: 10px 5px 10px;
}
.hero2:hover{
    box-shadow: 4px 3px 16px;

}
.hero .hero3{
    text-align: center;
    width: 22rem;
    height: 22rem;
    box-shadow: 10px 5px 10px;
}
.hero3:hover{
    box-shadow: 4px 3px 16px;
}
.hero .id{
    width: 22rem;
    height: 18rem;
    
}
.hero .id2{
    width: 22rem;
    height: 18rem;
}
.hero .id3{
    width: 22rem;
    height: 18rem;
}
.hero h3 a{
    text-decoration: none;
    color: black;
}

.end footer{
    width: 100% !important;
    background-color: black;
    height: 20rem;
    color: white;
    margin-top: 100px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-left: 2;
    
}

.end footer h4{
    font-size: 25px;
    font-weight: 500;
}
.fa-brands{
    width: 20px;
    font-weight: bolder;
    font-size: 20px;
}
#copy{
    position: relative;
   top: 120px;
   right: 350px;
}
</style>

<div class="container">
    <div class="text" > <h3>تعلم واعثر علي عمل في </h3>
    <h2>مكان واحد</h2>
    <p>نربط الشركات بالمواهب المتنوعه وندعم فرص ذوي الهمم لتعزيز <br> 
        التنوع والشموليه انضمو الينا لاستكشاف الفرص  <br>وتطوير مسيرتكم المهنيه
    </p>
</div>
    <div class="image">
        <img src="" alt="">
    </div>
   </div>
   <br><br>
<div class="hero">
    <div class="hero1"><img class="id" src=".././image/___cover.jfif" alt=""><h3><a href="#">الوظائف</a></h3></div>
    <div class="hero2"><img class="id2" src=".././image/60c21d5ab0d83040295e17db_online-course-blog-header.jpg" alt=""><h3><a href="#">كورسات</a></h3></div>
    <div class="hero3"><img class="id3" src=".././image/image-28479-saudi-arabian-gulf-employee-people-determination-working-computer-thumbnail.jpg" alt=""><h3><a href="#">ذوي الهمم</a></h3></div>
</div>
<br>
<br>
<div class="end" dir="ltr">
    <footer>
        <div class="contatct">
            <h4>contact us</h4>
            <h6>email</h6>
            <h6>al-shrouk@gmail.com</h6>
            <h6>phone</h6>
            <h6>01008905901</h6>
            <h6>address</h6>
            <h6>Egypt</h6>
        </div>
        <div class="follow">
            <h4>follow us</h4>
            <div class="icon">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-github"></i>
            <i class="fa-brands fa-whatsapp"></i>
            <p id="copy">copyright <i class="fa-solid fa-copyright"></i>   مهنتك 2024         </p>

        </div>
        </div>
    </footer>
    </div>
@endsection 