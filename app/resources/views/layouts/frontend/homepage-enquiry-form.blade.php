{{-- <style>
    .form-container {
        background-color: #102a43;
        width: 100%;
        margin-bottom: 10px auto;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        color: white;
        text-align: center;
    }

    .form-header h2 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
        color: #fff;
    }

    .travel-form {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .form-group label {
        font-size: 14px;
        font-weight: bold;
        color: #a8b2d1;
    }

    .form-control {
        border: none;
        border-radius: 25px;
        padding: 12px 15px;
        font-size: 16px;
        color: #102a43;
        background: #e2e8f0;
        box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .form-control:focus {
        outline: none;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    }

    .form-btn {
        background-color: #1c7ed6;
        color: white;
        border: none;
        border-radius: 25px;
        padding: 12px 25px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-btn:hover {
        background-color: #74c0fc;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .form-container {
            padding: 20px;
        }

        .form-header h2 {
            font-size: 20px;
        }

        .form-btn {
            font-size: 14px;
        }
    }
</style> --}}

<style>
    /* General Reset */


    /* Form Container */
    .form-container {
        margin: 10px auto;
        padding: 10px;
        /* max-width: 1500px; */
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
    }

    /* Form Header */
    .form-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-header h2 {
        font-size: 1.5rem;
        color: #000000;
        margin: 0;
    }

    /* Travel Form Styling */
    .travel-form {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 15px;
    }

    .travel-form .form-row {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .travel-form .form-control {
        width: 100%;
        padding: 10px;
        font-size: 1rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        transition: border-color 0.3s ease;
    }

    .travel-form .form-control:focus {
        border-color: #4a90e2;
        outline: none;
        box-shadow: 0 0 5px rgba(74, 144, 226, 0.5);
    }

    /* Submit Button */
    .form-btn {
        width: 100%;
        padding: 12px;
        font-size: 1rem;
        font-weight: bold;
        color: #fff;
        background-color: #4a90e2;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-btn:hover {
        background-color: #357abd;
    }

    /* Responsive Design */
    @media (min-width: 768px) {

        .travel-form .col-xl-3,
        .travel-form .col-lg-3,
        .travel-form .col-md-6 {
            flex: 0 0 23%;
            max-width: 23%;
        }

        .form-btn {
            width: auto;
            padding: 10px 20px;
            margin-top: auto;
        }
    }

    @media (max-width: 767px) {
        .travel-form {
            flex-direction: column;
        }

        .travel-form .col-xl-3,
        .travel-form .col-lg-3,
        .travel-form .col-md-6,
        .travel-form .form-group {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .form-btn {
            width: 100%;
        }
    }
</style>

<div class="form-container">
    <div class="form-header">
        <h2 class="p-1">Plan Your Trip</h2>
    </div>
    <form class="travel-form px-2">
        <div class="form-row row my-2">

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 col-12">
                <label for="from">From</label>
                <select id="from" name="city" class="form-control">
                    <option value="">Select City</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Vietnam">Vietnam</option>
                </select>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 col-12">
                <label for="from">To</label>
                <select id="from" name="city" class="form-control">
                    <option value="">Select City</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Vietnam">Vietnam</option>
                </select>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 col-12">
                <label for="people">Travellers</label>
                <select id="people" name="people" class="form-control">
                    <option value="">Number of People</option>
                    <option value="1">1 </option>
                    <option value="2">2 </option>
                    <option value="1">3 </option>
                    <option value="2"> 4</option>
                    <option value="1"> 5</option>
                    <option value="2">6 </option>
                    <option value="1">7 </option>
                    <option value="2">8 </option>
                    <option value="1">9 </option>
                    <option value="2"> 10</option>
                    <option value="1"> 11</option>
                    <option value="2"> 12</option>
                    <option value="1"> 13</option>
                    <option value="2"> 14</option>
                    <option value="1"> 15</option>
                    <option value="2"> 16</option>
                    <option value="1"> 17</option>
                    <option value="2">18 </option>

                    <option value="1"> 19</option>
                    <option value="2"> 20</option>
                    <option value="1"> 21</option>
                    <option value="2"> 22</option>
                    <option value="1"> 23</option>
                    <option value="2"> 24</option>

                    <option value="1">25 </option>
                    <option value="2"> 26</option>
                    <option value="1"> 27</option>
                    <option value="2"> 28</option>
                    <option value="1"> 29</option>
                    <option value="2"> 30</option>
                    <option value="1"> 31</option>
                    <option value="2"> </option>


                </select>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 col-12">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" class="form-control"
                    placeholder="Enter your number">
            </div>

            <div class="form-group">
                <button type="submit" class="form-btn">Search</button>
            </div>




        </div>
    </form>
</div>





<div class="custom-carousel owl-carousel mt-2" >
    <div class="custom-item" >
        <div class="custom-carousel-content">
            <img src="{{ asset('frontend/images/logo/explore-png.png') }}" style="width: 100%;height: 100%;" alt="Explore Logo" class="custom-logo">
            {{-- <h3 class="custom-title">Explore</h3> --}}
        </div>
    </div>
    <div class="custom-item">
        <div class="custom-carousel-content">
            <img src="{{ asset('frontend/images/logo/hotel.jpeg') }}" style="width: 100%;height: 100%;" alt="Hotel Logo" class="custom-logo">
            {{-- <h3 class="custom-title">Hotels</h3> --}}
        </div>
    </div>
    <div class="custom-item">
        <div class="custom-carousel-content">
            <img src="{{ asset('frontend/images/logo/car-png.png') }}" style="width: 100%;height: 100%;" alt="Car Logo" class="custom-logo">
            {{-- <h3 class="custom-title">Car</h3> --}}
        </div>
    </div>

    <div class="custom-item">
        <div class="custom-carousel-content">
            <img src="{{ asset('frontend/images/logo/train-png.png') }}" style="width: 100%;height: 100%;" alt="Car Logo" class="custom-logo">
            {{-- <h3 class="custom-title">Train Ticket</h3> --}}
        </div>
    </div>
</div>
