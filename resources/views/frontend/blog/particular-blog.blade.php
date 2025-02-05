@extends('layouts.frontend.layout')


@section('style')
<style>
    /* Typography */
@import url('https://fonts.googleapis.com/css2?family=Lora&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lora&family=Ubuntu:wght@300;400;700&display=swap');
/* body {
    margin: 0;
    font-family: 'Ubuntu', sans-serif;
    font-size: 1.125rem;
    font-weight: 300;
} */

a {
    color: #1792d2;
}

a:hover,
a:focus {
    color: #143774;
}

strong {
    font-weight: 700;
}
.subtitle{
  font-size: 0.85rem;
  font-weight: 700;
  margin: 0;
  color: #1792d2;
  letter-spacing: 0.05em;
  font-family: 'Ubuntu Bold', sans-serif;
}
.article-title {
    font-size: 1.5rem;
}

.article-read-more,
.article-info {
    font-size: .875rem;
}

.article-read-more {
    color: #1792d2;
    text-decoration: none;
    font-weight: 700;
}
.article-read-more:hover,
.article-read-more:focus {
    color: #143774;
    text-decoration: underline;
}
.article-info {
    margin: 2em 0;
}
header{
  padding: 2em 0;
  text-align: center;
  background: #f0f8ff;
  font-family: sans-serif;
  margin-bottom: 3em;
}
.container-flex{
  max-width: 70vw;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  margin-bottom: 1em;
}


img{
  max-width: 100%;
  display: block;
}
main{
  max-width: 75%;
}
.article-body{
  width: 100%;
  text-align: justify;
}
.sidebar{
  max-width: 23%;
}

@media (max-width:1050px){
  .container-flex{
    flex-direction: column;
  }
  .site-title, .subtitle{
    width: 100%;
  }
  main{
    max-width: 100%;
  }
  .sidebar{
    max-width: 100%;
  }

}


/* articles */
.article-featured {
    border-bottom: #707070 1px solid;
    padding-bottom: 2em;
    margin-bottom: 2em;
}
.article-recent {
    display: flex;
    flex-direction: column;
    margin-bottom: 2em;
}

.article-recent-main {
    order: 2;
}

.article-recent-secondary {
    order: 1;
}

@media (min-width: 675px) {
    .article-recent {
        flex-direction: row;
        justify-content: space-between;
    }

    .article-recent-main {
        width: 68%;
    }

    .article-recent-secondary {
        width: 30%;
    }
}
</style>
@endsection

@section('content')

<div class="container container-flex mt-2">
    <main role="main">

        <article class="article-featured">
            <h2 class="article-title">Finding simplicity in life</h2>
            <img src="https://raw.githubusercontent.com/kevin-powell/reponsive-web-design-bootcamp/master/Module%202-%20A%20simple%20life/img/life.jpg" alt="simple white desk on a white wall with a plant on the far right side" class="article-image">
            <p class="article-info">July 23, 2019 | 3 comments</p>
            <p class="article-body">Life can get complicated really quickly, but it doesn't have to be! There are many ways to simplify your life, a few of which we've explored in the past. This week we're taking a bit of a approach though, in how you can find simplicity in the life you already living.</p>
            <a href="#" class="article-read-more">CONTINUE READING</a>
        </article>

        <article class="article-recent">
            <div class="article-recent-main">
                <h2 class="article-title">Keeping cooking simple </h2>
                <p class="article-body">Food is a very important part of everyone's life. If you want to be healthy, you have to eat healthy. One of the easiest ways to do that is to keep your cooking nice and simple.</p>
                <a href="#" class="article-read-more">CONTINUE READING</a>
            </div>
            <div class="article-recent-secondary">
                <img src="https://raw.githubusercontent.com/kevin-powell/reponsive-web-design-bootcamp/master/Module%202-%20A%20simple%20life/img/food.jpg" alt="two dumplings on a wood plate with chopsticks" class="article-image">
                <p class="article-info">July 19, 2019 | 3 comments</p>
            </div>
        </article>

        <article class="article-recent">
            <div class="article-recent-main">
                <h2 class="article-title">Simplicity and work </h2>
                <p class="article-body">Work is often a major source of stress. People get frustrated, it ruins their relationship with others and it leads to burnout. By keeping your work life as simple as possible, it will help balance everything out.</p>
                <a href="#" class="article-read-more">CONTINUE READING</a>
            </div>
            <div class="article-recent-secondary">
                <img src="https://raw.githubusercontent.com/kevin-powell/reponsive-web-design-bootcamp/master/Module%202-%20A%20simple%20life/img/work.jpg" alt="a chair white chair at a white desk on a white wall" class="article-image">
                <p class="article-info">July 12, 2019 | 3 comments</p>
            </div>
        </article>

        <article class="article-recent">
            <div class="article-recent-main">
                <h2 class="article-title">Simple decorations</h2>
                <p class="article-body">A home isn't a home until you've decorated a little. People either don't decorate, or they go overboard and it doesn't have the impact they were hoping for. Staying simple will help draw the eye where you want it to and make things pop like never before.</p>
                <a href="#" class="article-read-more">CONTINUE READING</a>
            </div>
            <div class="article-recent-secondary">
                <img src="https://raw.githubusercontent.com/kevin-powell/reponsive-web-design-bootcamp/master/Module%202-%20A%20simple%20life/img/work.jpg" alt="a green plant in a clear, round vase with water in it" class="article-image">
                <p class="article-info">July 3, 2019 | 3 comments</p>
            </div>
        </article>
    </main>

    <aside class="sidebar">

        <div class="sidebar-widget">
            <h2 class="widget-title">ABOUT ME</h2>
            <img src="https://raw.githubusercontent.com/kevin-powell/reponsive-web-design-bootcamp/master/Module%202-%20A%20simple%20life/img/about-me.jpg" alt="john doe" class="widget-image">
            <p class="widget-body">I find life better, and I'm happier, when things are nice and simple.</p>
        </div>

        <div class="sidebar-widget">
            <h2 class="widget-title">RECENT POSTS</h2>
            <div class="widget-recent-post">
                <h3 class="widget-recent-post-title">Keeping cooking simple</h3>
                <img src="https://raw.githubusercontent.com/kevin-powell/reponsive-web-design-bootcamp/master/Module%202-%20A%20simple%20life/img/food.jpg" alt="two dumplings on a wood plate with chopsticks" class="widget-image">
            </div>
            <div class="widget-recent-post">
                <h3 class="widget-recent-post-title">Simplicity and work</h3>
                <img src="https://raw.githubusercontent.com/kevin-powell/reponsive-web-design-bootcamp/master/Module%202-%20A%20simple%20life/img/work.jpg" alt="a chair white chair at a white desk on a white wall" class="widget-image">
            </div>
            <div class="widget-recent-post">
                <h3 class="widget-recent-post-title">Simple decorations</h3>
                <img src="https://raw.githubusercontent.com/kevin-powell/reponsive-web-design-bootcamp/master/Module%202-%20A%20simple%20life/img/deco.jpg" alt="a green plant in a clear, round vase with water in it" class="widget-image">
            </div>
        </div>

    </aside>

</div>

@endsection

@section('js')


@endsection
