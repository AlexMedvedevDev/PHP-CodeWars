INSTRUCTIONS
My friend John likes to go to the cinema. He can choose between system A and system B.

System A : he buys a ticket (15 dollars) every time
System B : he buys a card (500 dollars) and a first ticket for 0.90 times the ticket price, 
then for each additional ticket he pays 0.90 times the price paid for the previous ticket.
John wants to know how many times he must go to the cinema so that the final result of System B, when rounded up to the next dollar, will be cheaper than System A.

The function movie has 3 parameters: card (price of the card), ticket (normal price of a ticket), perc (fraction of what he paid for the previous ticket) and returns the first n such that

ceil(price of System B) < price of System A.
More examples:
movie(500, 15, 0.9) should return 43 
    (with card the total price is 634, with tickets 645)
movie(100, 10, 0.95) should return 24 
    (with card the total price is 235, with tickets 240)

SOLUTIONS
<?php
function movie($card, $ticket, $perc) {
    $ta = 0;
    $tb = $card;
    $i=0;
    do {
      $i++;
      $ta += $ticket;
      $tb += $ticket * pow($perc, $i);      
    } while (ceil($ta) <= ceil($tb));
    return $i;
}

// function movie($card, $ticket, $percentage) {
//     $calculator = new Calculator($card, $ticket, $percentage);
//     return $calculator->calculateVisitsToBreakEven();
// }

// class Calculator
// {
//     private $card_price;
//     private $ticket_price;
//     private $last_ticket_price_with_card;
//     private $percentage;
    
//     private $visits;
//     private $amount_spent_with_card;
//     private $amount_spent_without_card = 0;
    
//     public function __construct($card_price, $ticket_price, $percentage)
//     {
//         $this->card_price = $card_price;
//         $this->ticket_price = $ticket_price;
//         $this->last_ticket_price_with_card = $ticket_price;
//         $this->percentage = $percentage;
        
//         $this->amount_spent_without_card = 0;
//         $this->amount_spent_with_card = $this->card_price;
//     }
    
//     public function calculateVisitsToBreakEven()
//     {
//         return $this->goToTheCinema();
//     }
    
//     private function goToTheCinema()
//     {
//         $this->visits += 1;
        
//         $this->amount_spent_with_card += $this->getTicketPriceWithCard();
//         $this->amount_spent_without_card += $this->ticket_price;
        
//         if (ceil($this->amount_spent_with_card) < $this->amount_spent_without_card) {
//             return $this->visits;
//         } else {
//             return $this->goToTheCinema();
//         }
//     }
    
//     private function getTicketPriceWithCard()
//     {
//         $this->last_ticket_price_with_card *= $this->percentage;
//         return $this->last_ticket_price_with_card;
//     }
// }