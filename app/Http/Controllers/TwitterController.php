<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;
use Illuminate\Mail\Message;
use App\Jobs\TwitterDispatcherJob;
// require "vendor/autoload.php";

class TwitterController extends Controller
{
    public function TwitterTest(){
        $job = new TwitterDispatcherJob();
        // CryptovationX
        $access_token = "890977235871518720-pDNVkWNs8ygTjO4wO6zXyLWJCQM9jJi";
        $access_token_secret = "XJEGCnQnqRmJRUx8dNDkQ6VuzqvmojvgfL1n3C7aYA3u1";
        $CONSUMER_KEY = "LNQB9SAw3lbo8P7L70p3E5G7M";
        $CONSUMER_SECRET = "6DakxWdy4YxBAJix5YnKov7Pe1h8oNgTgQrZRF5V82AlT22Bhv";
        // Win test
        // $access_token = "1017439345370808320-rkekaaeaMEyC0xKR7gHbqtzviDDbCk";
        // $access_token_secret = "CZ6BMiHjXyIHGxn8zM9SS3IeIwGyrF6Vz2B3zsODuuddh";
        // $CONSUMER_KEY = "ldzXv1dLc6IZfk9zmpLmy32tp";
        // $CONSUMER_SECRET = "va6AJ4DZymi7Ooju8pfC8iYkwgOB8Ka5HmzfDiXPvLwL8cHulh";
        $connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $access_token, $access_token_secret);

        // Get follower id
        $content = $connection->get("followers/list");
        // dd($content);
        $followers_id = $content->users[0]->id;
        $sent_messages = $connection->get("direct_messages/sent");
        dd($sent_messages);
        $recipient_id = $sent_messages[0]->recipient_id;
        $followers = sizeof($content->users);
        $text = "📌 Welcome to the official telegram group of CryptovationX ‘The Best Friend for Crypto Investors’! 

        📣 Announcement: 
        
        CrypovationX would like to give away the ticket of Hybrid Summit 2018 by @hybridblock (www.hybridsummit2018.com) to our community! You can win the ticket worth 250$ each by participating in our “Prediction Game”!
        
        “Prediction Game”
        What will be the price of Bitcoin (BTC) tomorrow midnight UTC time? 
        - New York Time: Wednesday 25  July  2018, 20.00
        - London Time: Thursday 26  July 2018, 01:00
        - Dubai Time: Thursday 26 July 2018, 04:00
        - Bangkok Time: Thursday 26 July 2018, 7.00 
        
        ----------------------------
        ApplyHere: https://www.cryptovationx.io
        ---------------------------- 
        
        We will close the game at the time of question (25 July 2018, 24.00 UTC) and we will use the average price by Coin Market Cap (coinmarketcap.com) to be the answer. The winner will be contacted back via the email you summit to us.
        
        ---------------------------- 
        
        “CryptovationX (CXA) Airdrop Round #2 - The Qualifier List Announcement!”
        
        https://docs.google.com/spreadsheets/d/1HH2oe9bqvJY_9zRQVGm_b_DINN5mgSnwg9fnLjYU0xA/edit#gid=1201372328
        
        As a result, each qualifier will receive 410 CXA Tokens once verified through out an email. Thank you for your support as always!
        If you are not on the list that means you have not either join Telegram or follow us on Twitter. Thank you for your participation.
        
        (CryptovationX channels are listed at the bottom of this pinned message)
        
        *Don’t forget to join CryptovationX (CXA) Airdrop & Bounty group: https://t.me/CryptovationX_Airdrop_Bounty
        
        Thank you for your supports! 🙏🏻😊
        
        —-
        🔖 Short Summary:
        CryptovationX is a robo-advisory platform on your phone that will help ‘Answer, Advise & Auto-invest’ in cryptoassets. By holding a certain amount of CXA tokens, you will be able to access each level of our robo-advisors. 
        
        🏙 About CryptovationX: 
        After a successful journey of developing a cryptoasset management software for fund manager, Cryptovation.co has partnered with launching AVA Advisory (ava.fund) and Asia Wealth Group (asiawealthgroup.com) to launch ‘CryptovationX (CXA)' that aims to utilize artificial intelligence (AI) to build the best robo-advisory platform for cryptoasset investment with the vision of 'Wealth for All'.
        
        🔐 Token Details:
        CXA tokens will be issued on Ethereum Blockchain using the ERC-20 standard and 100% of the tokens will be issued prior to token sale period. Token total supply is 12,000,000,000 CXA and tokens for sale is 7,200,000,000 CXA.
        
        🚀 Sale Method: 
        CryptovationX will not launch a public crowdsale (public ICO). Besides airdrop and bounty program, the only way to acquire the CXA token is through the private sales. Please contact CryptovationX directly for more information. The sale will end by July 2018.
        
        ✅ CryptovationX Telegram group rules:
        1) No spam, advertisements or promotion of other products, or links/referrals to other services;
        2) No discriminatory messages, harassment, or offensive comments or images;
        3) No copyright-infringing material;
        4) No unauthorized bots;
        5) No posting of false information;
        6) No discussion of cryptocurrency or token pricing, whether related to CXA or otherwise.
        
        The Group is for discussions of the Platform and its associated technology and potential uses.  Although the utility token CXA will be issued as part of the launch of the Platform, the Group is not intended for discussion of any use of CXA other than as a prerequisite for use of the Platform. CXA is a utility token and not intended to be used for investment or speculation.  Accordingly, we ask that members not use the Group to discuss token trading, exchanges, investments, market prices, appreciation or deprecation, or any other economic aspect of any token or cryptocurrency, not just CXA. The CryptovationX team will neither comment on nor respond to questions regarding these topics. Keep the discussion to the Platform. Members who wish to discuss these topics should do so over private messages, not in the Group.  Perpetrators will be first warned, then banned.
        
        👨‍👩‍👧‍👦 Admin:
        @CryptovationX_Official
        @PondetX
        @MatsumotoX
        @GotCXA
        @JuneCXA
        @WundCXA
        
        ‼️ Caution: 
        Be careful of scammers, only trust message from members with ‘admin’ tag! No one from the team will ever send you a private message asking for Airdrop or ICO contributions. You should always assume that such a message is being sent by a scammer and should inform us and the community immediately! 
        
        🌐 Links:
        Website: https://CryptovationX.io
        Telegram: t.me/CryptovationX_Official
        Twitter: twitter.com/CryptovationX
        Medium: medium.com/CryptovationX
        Instagram: instagram.com/CryptovationX";

        if($recipient_id == $followers_id){
            sleep(90);
            $this->dispatch($job);
        }else{
            for ($i=0; $i < $followers; $i++) { 
                if($recipient_id == $content->users[$i]->id){
                    sleep(90);
                    $this->dispatch($job);
                }else{
                    $options = array("user_id" => $content->users[$i]->id, "text" => "$text");
                    $post = $connection->post('direct_messages/new', $options);
                    // echo($content->users[$i]->id);
                }
            }
        }
    
}
}
