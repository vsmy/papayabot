@extends ('layout.app')

@section('title')
    Tearms and conditions
@stop

@section('title')
    Tearms and conditions
@stop

@section ('content')

<section class="terms">
    <div class="container ">
        <div class="row justify-content-between">
            <div class="logo">
                <a  href="{{route('welcome')}}"><h5 class="title-logo ml-0">Papayabot</h5></a>
            </div>
            <a href="/" class="title-logo">Back to homepage</a>
        </div>
    </div>
</section>

<section class="standard mt-5" >
    <div class="container ">
        <h2 class="title">Terms and conditions</h2>
        <br><br><br>
        <h4  class="title">Content rights & responsibilities</h4>
        <br>
        <h5 class="subtitle">You own the rights to the content you create and post on Medium.
            <br>
            <br>
            By posting content to Medium, you give us a nonexclusive license to publish it on Medium Services, including anything reasonably related to publishing it (like storing, displaying, reformatting, and distributing it). In consideration for Medium granting you access to and use of the Services, you agree that Medium may enable advertising on the Services, including in connection with the display of your content or other information. We may also use your content to promote Medium, including its products and content. We will never sell your content to third parties without your explicit permission.
            <br>
            <br>
            You’re responsible for the content you post. This means you assume all risks related to it, including someone else’s reliance on its accuracy, or claims relating to intellectual property or other legal rights.
            <br>
            <br>
            You’re welcome to post content on Medium that you’ve published elsewhere, as long as you have the rights you need to do so. By posting content to Medium, you represent that doing so doesn’t conflict with any other agreement you’ve made.</h5>

        <h4 class="title">Our content and services</h4>
        <br>
        <h5 class="subtitle">
            We reserve all rights in Medium’s look and feel. Some parts of Medium are licensed under third-party open source licenses. We also make some of our own code available under open source licenses. As for other parts of Medium, you may not copy or adapt any portion of our code or visual design elements (including logos) without express written permission from Medium unless otherwise permitted by law.
            <br><br>
            You may not do, or try to do, the following: (1) access or tamper with non-public areas of the Services, our computer systems, or the systems of our technical providers; (2) access or search the Services by any means other than the currently available, published interfaces (e.g., APIs) that we provide; (3) forge any TCP/IP packet header or any part of the header information in any email or posting, or in any way use the Services to send altered, deceptive, or false source-identifying information; or (4) interfere with, or disrupt, the access of any user, host, or network, including sending a virus, overloading, flooding, spamming, mail-bombing the Services, or by scripting the creation of content or accounts in such a manner as to interfere with or create an undue burden on the Services.
            <br><br>
            Incorporated rules and policies
            By using the Services, you agree to let Medium collect and use information as detailed in our Privacy Policy. If you’re outside the United States, you consent to letting Medium transfer, store, and process your information (including your personal information and content) in and out of the United States.
            <br><br>
            To enable a functioning community, we have Rules. To ensure usernames are distributed and used fairly, we have a Username Policy. Under our DMCA Policy, we’ll remove material after receiving a valid takedown notice. Under our Trademark Policy, we’ll investigate any use of another’s trademark and respond appropriately.
            By using Medium, you agree to follow these Rules and Policies. If you don’t, we may remove content, or suspend or delete your account.
            <br><br>
            Miscellaneous
            Disclaimer of warranty. Medium provides the Services to you as is. You use them at your own risk and discretion. That means they don’t come with any warranty. None expressed, none implied. No implied warranty of merchantability, fitness for a particular purpose, availability, security, title or non-infringement.
            <br><br>
            Limitation of Liability. Medium won’t be liable to you for any damages that arise from your using the Services. This includes if the Services are hacked or unavailable. This includes all types of damages (indirect, incidental, consequential, special or exemplary). And it includes all kinds of legal claims, such as breach of contract, breach of warranty, tort, or any other loss.
            <br><br>
            No waiver. If Medium doesn’t exercise a particular right under these Terms, that doesn’t waive it. Severability. If any provision of these terms is found invalid by a court of competent jurisdiction, you agree that the court should try to give effect to the parties’ intentions as reflected in the provision and that other provisions of the Terms will remain in full effect.
            <br><br>
            Choice of law and jurisdiction. These Terms are governed by California law, without reference to its conflict of laws provisions. You agree that any suit arising from the Services must take place in a court located in San Francisco, California. Entire agreement. These Terms (including any document incorporated by reference into them) are the whole agreement between Medium and you concerning the Services.

        </h5>
    </div>
</section>

@endsection
