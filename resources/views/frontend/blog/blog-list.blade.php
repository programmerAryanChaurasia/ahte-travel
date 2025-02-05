@extends('layouts.frontend.layout')


@section('style')
<style>
    @import url(https://fonts.googleapis.com/css?family=Merriweather:400,300,700);

@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);


h1,h4{
  font-family: 'Montserrat', sans-serif;
}
.seperator{
  margin-bottom: 30px;
  width:35px;
  height:3px;
  background:#777;
  border:none;
}
.title{
  text-align: center;

  .row{
    padding: 50px 0 0;
  }

  h1{
    text-transform: uppercase;
  }

  .seperator{
    margin: 0 auto 10px;
  }
}
.item {
  position: relative;
  margin-bottom: 30px;
  min-height: 1px;
  float: left;
  -webkit-backface-visibility: hidden;
  -webkit-tap-highlight-color: transparent;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

  .item-in {
    background: #fff;
    padding: 40px;
    position: relative;

    &:hover:before {
      width: 100%;
    }

    &::before {
    content: "";
    position: absolute;
    bottom: 0px;
    height: 2px;
    width: 0%;
    background: #333333;
    right: 0px;
    -webkit-transition: width 0.4s;
    transition: width 0.4s;
    }
  }
}
.item{

  h4{
      font-size: 18px;
      margin-top: 25px;
      letter-spacing: 2px;
      text-transform: uppercase;
    }
    p{
      font-size: 12px;
    }
    a{
      font-family: 'Montserrat', sans-serif;
      font-size: 12px;
      text-transform: uppercase;
      color: #666666;
      margin-top: 10px;

      i {
        opacity: 0;
        padding-left: 0px;
        transition: 0.4s;
        font-size: 24px;
        display: inline-block;
        top: 5px;
        position: relative;
       }

      &:hover {
        text-decoration:none;
        i {
          padding-left: 10px;
          opacity: 1;
          font-weight: 300;
          }
        }
      }
    }
.item .icon {
  position:absolute;
  top: 27px;
  left: -16px;
  cursor:pointer;
    a{
      font-family: 'Merriweather', serif;
      font-size: 14px;
      font-weight:400;
      color: #999;
      text-transform:none;
    }
    svg{
      width:32px;
      height:32px;
      float:left;
    }
    .icon-topic{
      opacity: 0;
      padding-left: 0px;
      transition: 0.4s;
      display: inline-block;
      top: 0px;
      position: relative;
    }
    &:hover .icon-topic{
      opacity: 1;
      padding-left: 10px;
    }
  }
@media only screen and (max-width : 768px) {
  .item .icon{position: relative; top: 0; left:0;}
}
</style>

<style>
 .pagination-container {
  margin-top: 40px;
  text-align: center; /* Ensures the pagination is centered */
}

.pagination {
  display: flex; /* Use flexbox for horizontal layout */
  justify-content: center; /* Center the items horizontally */
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem;
}

.pagination .page-item {
  margin-left: 5px; /* Adds space between the pagination items */
}

.pagination .page-link {
  color: #007bff;
  padding: 8px 16px;
  border: 1px solid #ddd;
  border-radius: 0.25rem;
  cursor: pointer;
  transition: background-color 0.3s ease;
  text-decoration: none;
}

.pagination .page-link:hover {
  background-color: #007bff;
  color: white;
}

.pagination .disabled .page-link {
  color: #6c757d;
  pointer-events: none;
}

.pagination .active .page-link {
  background-color: #007bff;
  border-color: #007bff;
  color: white;
}

</style>
@endsection

@section('content')
<div class="">

    <section class="title container">
        <div class="row">
          <div class="col-md-12">
            <h1>Blog List</h1>
            <div class="seperator"></div>
          </div>
          {{-- <div class="">
            <button>Create Post</button>
          </div> --}}
        </div>
      </section>

      <div class="container">
        <div class="row">
          <div class="col-md-6 item">
            <div class="item-in">
                <img src="{{ asset('frontend\images\gallery_small_6.jpg') }}" alt="img" height="200px;">
              <div class="icon">
                <a href="#">
                <?xml version="1.0" encoding="iso-8859-1"?>
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16.662 16.662" xml:space="preserve" width="512px" height="512px">
                  <g>
                    <path d="M13.365,0.324H3.297L0,5.109l8.331,11.229l8.331-11.229C16.662,5.109,13.365,0.324,13.365,0.324z    M15.213,4.734h-3.4l1.298-3.054C13.111,1.68,15.213,4.734,15.213,4.734z M12.526,1.303l-1.342,3.156L9.071,1.303H12.526z    M10.544,4.734H6.442l1.909-3.273L10.544,4.734z M7.648,1.303L5.856,4.378L4.185,1.303H7.648z M3.584,1.634l1.685,3.1h-3.82   C1.449,4.734,3.584,1.634,3.584,1.634z M1.45,5.421h4.124l1.95,8.184C7.524,13.605,1.45,5.421,1.45,5.421z M6.279,5.421h4.548   l-2.468,8.732C8.359,14.153,6.279,5.421,6.279,5.421z M9.28,13.413l2.259-7.992h3.672L9.28,13.413z" fill="#777777"/>
                  </g>
                  </svg>
                   <div class="icon-topic">By Admin</div>
                  </a>
              </div>
              <h4>Some Kind of Title</h4>
              <div class="seperator"></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi expedita eveniet consectetur, voluptates voluptatum, sit excepturi earum. Veniam eius amet, accusantium, deserunt officia, quos qui debitis laboriosam velit quis autem!</p>
              <a href="{{ route('particular-blog') }}">Read More
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 item">
            <div class="item-in">
                <img src="{{ asset('frontend\images\gallery_small_6.jpg') }}" alt="img" height="200px;">
              <div class="icon">
                <a href="#">
                <?xml version="1.0" encoding="iso-8859-1"?>
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16.662 16.662" xml:space="preserve" width="512px" height="512px">
                  <g>
                    <path d="M13.365,0.324H3.297L0,5.109l8.331,11.229l8.331-11.229C16.662,5.109,13.365,0.324,13.365,0.324z    M15.213,4.734h-3.4l1.298-3.054C13.111,1.68,15.213,4.734,15.213,4.734z M12.526,1.303l-1.342,3.156L9.071,1.303H12.526z    M10.544,4.734H6.442l1.909-3.273L10.544,4.734z M7.648,1.303L5.856,4.378L4.185,1.303H7.648z M3.584,1.634l1.685,3.1h-3.82   C1.449,4.734,3.584,1.634,3.584,1.634z M1.45,5.421h4.124l1.95,8.184C7.524,13.605,1.45,5.421,1.45,5.421z M6.279,5.421h4.548   l-2.468,8.732C8.359,14.153,6.279,5.421,6.279,5.421z M9.28,13.413l2.259-7.992h3.672L9.28,13.413z" fill="#777777"/>
                  </g>
                  </svg>
                   <div class="icon-topic">By User Post</div>
                  </a>
              </div>
              <h4>Some Kind of Title</h4>
              <div class="seperator"></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi expedita eveniet consectetur, voluptates voluptatum, sit excepturi earum. Veniam eius amet, accusantium, deserunt officia, quos qui debitis laboriosam velit quis autem!</p>
              <a href="{{ route('particular-blog') }}">Read More
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 item">
            <div class="item-in">
                <img src="{{ asset('frontend\images\gallery_small_6.jpg') }}" alt="img" height="200px;">
              <div class="icon">
                <a href="#">
                <?xml version="1.0" encoding="iso-8859-1"?>
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16.662 16.662" xml:space="preserve" width="512px" height="512px">
                  <g>
                    <path d="M13.365,0.324H3.297L0,5.109l8.331,11.229l8.331-11.229C16.662,5.109,13.365,0.324,13.365,0.324z    M15.213,4.734h-3.4l1.298-3.054C13.111,1.68,15.213,4.734,15.213,4.734z M12.526,1.303l-1.342,3.156L9.071,1.303H12.526z    M10.544,4.734H6.442l1.909-3.273L10.544,4.734z M7.648,1.303L5.856,4.378L4.185,1.303H7.648z M3.584,1.634l1.685,3.1h-3.82   C1.449,4.734,3.584,1.634,3.584,1.634z M1.45,5.421h4.124l1.95,8.184C7.524,13.605,1.45,5.421,1.45,5.421z M6.279,5.421h4.548   l-2.468,8.732C8.359,14.153,6.279,5.421,6.279,5.421z M9.28,13.413l2.259-7.992h3.672L9.28,13.413z" fill="#777777"/>
                  </g>
                  </svg>
                   <div class="icon-topic">By Admin</div>
                  </a>
              </div>
              <h4>Some Kind of Title</h4>
              <div class="seperator"></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi expedita eveniet consectetur, voluptates voluptatum, sit excepturi earum. Veniam eius amet, accusantium, deserunt officia, quos qui debitis laboriosam velit quis autem!</p>
              <a href="{{ route('particular-blog') }}">Read More
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 item">
            <div class="item-in">
                <img src="{{ asset('frontend\images\gallery_small_6.jpg') }}" alt="img" height="200px;">
              <div class="icon">
                <a href="#">
                <?xml version="1.0" encoding="iso-8859-1"?>
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16.662 16.662" xml:space="preserve" width="512px" height="512px">
                  <g>
                    <path d="M13.365,0.324H3.297L0,5.109l8.331,11.229l8.331-11.229C16.662,5.109,13.365,0.324,13.365,0.324z    M15.213,4.734h-3.4l1.298-3.054C13.111,1.68,15.213,4.734,15.213,4.734z M12.526,1.303l-1.342,3.156L9.071,1.303H12.526z    M10.544,4.734H6.442l1.909-3.273L10.544,4.734z M7.648,1.303L5.856,4.378L4.185,1.303H7.648z M3.584,1.634l1.685,3.1h-3.82   C1.449,4.734,3.584,1.634,3.584,1.634z M1.45,5.421h4.124l1.95,8.184C7.524,13.605,1.45,5.421,1.45,5.421z M6.279,5.421h4.548   l-2.468,8.732C8.359,14.153,6.279,5.421,6.279,5.421z M9.28,13.413l2.259-7.992h3.672L9.28,13.413z" fill="#777777"/>
                  </g>
                  </svg>
                   <div class="icon-topic">By User Post</div>
                  </a>
              </div>
              <h4>Some Kind of Title</h4>
              <div class="seperator"></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi expedita eveniet consectetur, voluptates voluptatum, sit excepturi earum. Veniam eius amet, accusantium, deserunt officia, quos qui debitis laboriosam velit quis autem!</p>
              <a href="{{ route('particular-blog') }}">Read More
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 item">
            <div class="item-in">
                <img src="{{ asset('frontend\images\gallery_small_6.jpg') }}" alt="img" height="200px;">
              <div class="icon">
                <a href="#">
                <?xml version="1.0" encoding="iso-8859-1"?>
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16.662 16.662" xml:space="preserve" width="512px" height="512px">
                  <g>
                    <path d="M13.365,0.324H3.297L0,5.109l8.331,11.229l8.331-11.229C16.662,5.109,13.365,0.324,13.365,0.324z    M15.213,4.734h-3.4l1.298-3.054C13.111,1.68,15.213,4.734,15.213,4.734z M12.526,1.303l-1.342,3.156L9.071,1.303H12.526z    M10.544,4.734H6.442l1.909-3.273L10.544,4.734z M7.648,1.303L5.856,4.378L4.185,1.303H7.648z M3.584,1.634l1.685,3.1h-3.82   C1.449,4.734,3.584,1.634,3.584,1.634z M1.45,5.421h4.124l1.95,8.184C7.524,13.605,1.45,5.421,1.45,5.421z M6.279,5.421h4.548   l-2.468,8.732C8.359,14.153,6.279,5.421,6.279,5.421z M9.28,13.413l2.259-7.992h3.672L9.28,13.413z" fill="#777777"/>
                  </g>
                  </svg>
                   <div class="icon-topic">By Admin</div>
                  </a>
              </div>
              <h4>Some Kind of Title</h4>
              <div class="seperator"></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi expedita eveniet consectetur, voluptates voluptatum, sit excepturi earum. Veniam eius amet, accusantium, deserunt officia, quos qui debitis laboriosam velit quis autem!</p>
              <a href="{{ route('particular-blog') }}">Read More
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 item">
            <div class="item-in">
                <img src="{{ asset('frontend\images\gallery_small_6.jpg') }}" alt="img" height="200px;">
              <div class="icon">
                <a href="#">
                <?xml version="1.0" encoding="iso-8859-1"?>
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16.662 16.662" xml:space="preserve" width="512px" height="512px">
                  <g>
                    <path d="M13.365,0.324H3.297L0,5.109l8.331,11.229l8.331-11.229C16.662,5.109,13.365,0.324,13.365,0.324z    M15.213,4.734h-3.4l1.298-3.054C13.111,1.68,15.213,4.734,15.213,4.734z M12.526,1.303l-1.342,3.156L9.071,1.303H12.526z    M10.544,4.734H6.442l1.909-3.273L10.544,4.734z M7.648,1.303L5.856,4.378L4.185,1.303H7.648z M3.584,1.634l1.685,3.1h-3.82   C1.449,4.734,3.584,1.634,3.584,1.634z M1.45,5.421h4.124l1.95,8.184C7.524,13.605,1.45,5.421,1.45,5.421z M6.279,5.421h4.548   l-2.468,8.732C8.359,14.153,6.279,5.421,6.279,5.421z M9.28,13.413l2.259-7.992h3.672L9.28,13.413z" fill="#777777"/>
                  </g>
                  </svg>
                   <div class="icon-topic">By User Post</div>
                  </a>
              </div>
              <h4>Some Kind of Title</h4>
              <div class="seperator"></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi expedita eveniet consectetur, voluptates voluptatum, sit excepturi earum. Veniam eius amet, accusantium, deserunt officia, quos qui debitis laboriosam velit quis autem!</p>
              <a href="{{ route('particular-blog') }}">Read More
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
          </div>

        </div>
      </div>

      <div class="pagination-container text-center">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1"><</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">></a>
          </li>
        </ul>
      </div>

  </div>
@endsection

@section('js')


@endsection
