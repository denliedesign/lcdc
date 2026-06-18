@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        @include('class-descriptions')
    </div>
    <div class="container my-5">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
            {{--            <div class="">--}}
            {{--                <p class="text-center rounded shadow p-3" style="height: 100%;">--}}
            {{--                    <strong>Tuition</strong><br>--}}
            {{--                    <a href="/tuition">See Tuition Rates & Details</a>--}}
            {{--                </p>--}}
            {{--            </div>--}}
            {{--            <div class="">--}}
            {{--                <p class="text-center rounded shadow p-3" style="height: 100%;">--}}
            {{--                    <strong>Dresscode</strong><br>--}}
            {{--                    <a href="https://www.shopnimbly.com/lcdanceco" target="_blank">Purchase Your Dancewear At Our Online Store</a>--}}
            {{--                    <br>--}}
            {{--                    You may purchase your Classwear from LCDC and get Classwear at a discounted rate from our website. We can size your child at one of our open houses or during the first week of class.--}}
            {{--                </p>--}}
            {{--            </div>--}}
            <div class="">
                <p class="text-center rounded shadow p-3" style="height: 100%;">
                    <strong>Availability</strong><br>
                    If classes fill up, other scheduled times may be added to accommodate this tentative schedule. If a class does not fill up, LCDC reserves the right to cancel the class.
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="">
                <p class="text-left rounded shadow p-3" style="height: 100%;">
                    <strong>Tumble Placement Levels/Skills Chart</strong><br>
                    <u>Ages 2-6:</u> This class is for those younger students. The athletes have a basic understanding of terminology and are progressing in their fundamental skills.
                    <br><br>
                    <u>Level I:</u> No skills and no prior training required.
                    <br><br>
                    <u>Level II:</u> Must demonstrate without a spot and with correct form - a strong cartwheel, a strong roundoff, a strong handstand. Additional skills to present may be requested by an instructor
                    <br><br>
                    <u>Level III:</u> Must demonstrate without a spot and with correct form - A backbend kick over, a strong roundoff, a front limber, and all Level I-II Skills. Additional skills to present may be requested by an instructor.
                    <br><br>
                    <u>Level IV:</u> Must demonstrate without a spot and with correct form - A back handspring, a back walkover, a front walkover, and all Level I-III Tumble skills.
                    <br><br>
                    <em>Our Dance class placement levels are initially based on age. However, it is ALWAYS up to the teacher’s discretion to move a child up or down a level based on ability and technique rather than age. This is for ALL Dance and Tumble classes.</em>
                </p>
            </div>
        </div>
        {{--        <div class="d-flex justify-content-center mt-5">--}}
        {{--            <img src="/images/dress-code.png" alt="dress code" class="img-fluid">--}}
        {{--        </div>--}}
    </div>

    <div class="container">
        <h1 class="text-center my-5">Tuition</h1>
        <div class="row" style="color: white;">
            <div class="col-sm">
                <div class="gradient-splash p-4 my-4">
                    <p>
                        All tuition payments will be withdrawn automatically from your account. Please fill out an
                        <a href="https://shorturl.at/EmFxF" target="_blank" class="text-white">ACH Form</a> and read more about this policy in our
                        <a href="https://shorturl.at/z8r6L" target="_blank" class="text-white">LCDC Policy Handbook</a>.
                    </p>
                </div>
                <div class="gradient-splash p-4 my-4">
                    <p>
                        There is a $5 discount for any additional family members enrolled in classes.
                    </p>
                </div>
                <div class="d-flex justify-content-center">
                    <img src="/images/26-27-draft-schedule.jpg" alt="payment schedule" class="img-fluid">
                </div>
            </div>
            <div class="col-sm">
                <div class="gradient-splash p-4 my-4">
                    <h3>Monthly Tuition Rates</h3>
                    <table class="table text-white">
                        <tr><td>30 minutes</td><td>$49</td></tr>
                        <tr><td>45 minutes - 1 hour</td><td>$75</td></tr>
                        <tr><td>1 hour 15 min</td><td>$110</td></tr>
                        <tr><td>1 hour 30 min</td><td>$113</td></tr>
                        <tr><td>1 hour 45  min</td><td>$116</td></tr>
                        <tr><td>2 hours</td><td>$122</td></tr>
                        <tr><td>2 hours 15 min</td><td>$133</td></tr>
                        <tr><td>2 hours 30 min</td><td>$136</td></tr>
                        <tr><td>2 hours 45 min</td><td>$139</td></tr>
                        <tr><td>3 hours</td><td>$147</td></tr>
                        <tr><td>3 hours 15 min</td><td>$151</td></tr>
                        <tr><td>3 hours 30 min</td><td>$154</td></tr>
                        <tr><td>3 hours 45 min</td><td>$157</td></tr>
                        <tr><td>4 hours</td><td>$166</td></tr>
                        <tr><td>4 hours 15 min</td><td>$175</td></tr>
                        <tr><td>4 hours 30 min</td><td>$178</td></tr>
                        <tr><td>4 hours 45 min</td><td>$181</td></tr>
                        <tr><td>5 hours</td><td>$192</td></tr>
                        <tr><td>5 hours 15 min</td><td>$199</td></tr>
                        <tr><td>5 hours 30 min</td><td>$202</td></tr>
                        <tr><td>5 hours 45 min</td><td>$205</td></tr>
                        <tr><td>6 hours</td><td>$218</td></tr>
                        <tr><td>6 hours 15 min</td><td>$225</td></tr>
                        <tr><td>6 hours 30 min</td><td>$228</td></tr>
                        <tr><td>6 hours 45 min</td><td>$231</td></tr>
                        <tr><td>7 hours</td><td>$238</td></tr>
                        <tr><td>7 hours 15 min</td><td>$245</td></tr>
                        <tr><td>7 hours 30 min</td><td>$248</td></tr>
                        <tr><td>7 hours 45 min</td><td>$251</td></tr>
                        <tr><td>8 hours</td><td>$259</td></tr>
                        <tr><td>8 hours 15 min</td><td>$266</td></tr>
                        <tr><td>8 hours 30 min</td><td>$269</td></tr>
                        <tr><td>8 hours 45 min</td><td>$272</td></tr>
                        <tr><td>9 hours</td><td>$280</td></tr>
                        <tr><td>9 hours 15 min</td><td>$287</td></tr>
                        <tr><td>9 hours 30 min</td><td>$290</td></tr>
                        <tr><td>9 hours 45 min</td><td>$293</td></tr>
                        <tr><td>10 hours</td><td>$299</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
