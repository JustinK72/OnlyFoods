# OnlyFoods repository

## TEAM Product Proposal Requirements
- [x] Before and After. What itch are you gonna scratch? 
- [x] Background: other apps, inspiration, interfaces?
- [x] Schematic: Flowchart, Process, Interface, Wireframe. Some visual depiction.
- [x] Process: Steps. Old way, new way? 
- [x] Approach: How to eat an elephant? (Brainstorm, ideas?) 
- [x] Presentation/Format: Clear and integrated with the REPO. 

## Resources
### The team wiki/info can be found [here](https://github.com/JustinK72/Functional-Product/wiki)
### Project [Deadlines](https://github.com/JustinK72/Functional-Product/projects/1)

[Heroku App](https://onlyfoodloginpage.herokuapp.com/signin.php)

## Behind the scenes action carousel 
The code below uses a slide and arrows to display three different photos. We updated this code with our own images and added buttons that shoot it from page to page to display the different menu items and prices.
```html
{
 <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="http://d1fd34dzzl09j.cloudfront.net/Images/CFACOM/Stories%20Images/2018/08/nuggets/h2cpT-3Q.jpeg" alt="8 Count Nugget" class="d-block" style="width:100%">
      </div>
      <div class="carousel-item">
        <img src="https://cdn.vox-cdn.com/thumbor/-3bt2sZHhWuSO0g5Z1NS9mIU0xc=/0x0:2048x1719/1200x800/filters:focal(861x697:1187x1023)/cdn.vox-cdn.com/uploads/chorus_image/image/68617495/Chick_fil_a_No_12.0.jpg" alt="chicken-nugget" class="d-block" style="width:100%">

      </div>
      <div class="carousel-item">
        <img src="http://d1fd34dzzl09j.cloudfront.net/Images/CFACOM/Stories%20Images/2018/08/nuggets/Header.jpg" alt="Yum" class="d-block" style="width:100%">
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
}
```
## Next steps
- Display images in a better way on the apps interface.
- Save users input as they go.
- Shuffle button?
- Take the app from the proto stage to final product. 🏅
