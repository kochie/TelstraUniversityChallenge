@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 2vh;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome to Bin Monsters!</div>

                <div class="panel-body">
                    The Binformation Center.
                </div>

                <div>
                    <video width="100%" controls>
                        <source src="{{URL::asset('assets/video/Bin Monsters Technical Video.mp4')}}" type="video/mp4">
                    </video>
                </div>

                <div style="padding: 2%">
                    <h1>Who are we?</h1>
                    <p>We are a group of students from Monash University who study across a whole range of fields including Business, Engineering, IT, Design and Architecture! We created the Bin Monsters to help us tackle the challenge by Keep Australia Beautiful.</p>
                    <h1>What’s the problem?</h1>
                    <ul>
                        <li>Australians throw lots of rubbish on the ground, not even bothering to walk to a bin!</li>
                        <li>Lots of Australians don’t care about or understand the effects of littering.</li>
                        <li>We need to help trigger a cultural and behavioural shift. Kids are the best way to do this.</li>
                    </ul>


                    <h1>Our Solution</h1>
                    <ul>
                        <li>We have created a new product – "Bin Monsters"– sensor-laden rubbish bins with larger than life personalities.</li>
                        <li>These monsters like to be fed rubbish – they like it so much that they remember when, where and who fed them and give feedback to kids while they are making the world a cleaner place.</li>
                        <li>The monsters can be sent out to teach people not to litter and help them understand how they pick up rubbish.</li>
                    </ul>


                    <h1>Technical Implementation</h1>
                    <ul>
                        <li>Bin Monsters and their sensors are wired up to a Raspberry Pi 3.</li>
                        <li>The Bin Monsters Team collect all kinds of data about what our bins are doing, including: where the bins are collecting rubbish, how much they collect and levels of traffic in the area.</li>
                        <li>Every so often, each monster sends this data to our “Binformation Centre” via a short (and energy-efficient) data packet. This is done using the Telstra 4GX network!</li>
                        <li>Using our website, people can explore the data in the Binformation Centre to see how the bins are performing, how we are educating people and generally making the world a cleaner place!</li>
                    </ul>


                    <h1>Marketing Vision</h1>
                    <ul>
                        <li>We are planning on sending the Bin Monsters into schools to recruit students to help “feed” the monsters.</li>
                        <li> The recruits will be split up into teams (usually in school houses) to compete to feed the monsters the most rubbish! The students will be able to track how each team is performing using the Binformation Centre. We are literally gamifying rubbish collection, which we think is a differentiator.</li>
                        <li> This program will be coupled with further education from Keep Australia Beautiful’s Eco-Schools curriculum and aims to teach kids good habits and give them an understanding of the impact of littering.</li>
                        <li> Once enough people know about the bins, we hope to send them out into the wider community.</li>
                        <li> We see a variety of payor/sponsor models. This is highly accessible and inexpensive technology.</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
