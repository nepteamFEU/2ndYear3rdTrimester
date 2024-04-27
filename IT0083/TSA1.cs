using System;
namespace DenominationApplication {
    class mainProgram {
        static void Main(string[] args){
        Console.WriteLine("Input the amount of money:");
        float inputMoney = float.Parse(Console.ReadLine());
        Console.WriteLine("The amount of money inputted is: " + inputMoney);
        Console.WriteLine("The following are the amount of denominations needed to reach the inputted amount: ");
        int inputCents = (int)(inputMoney * 100); //this will convert the cash into centavos
        int[] Denom = { 100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 100, 50, 25, 10, 5}; 
        string[] DenomNames = { "One Thousands: ", "Five Hundreds: ", "Two Hundreds: ","One Hundreds: ","Fifties: ", "Twenties: ","Tens: ", "Fives: ", "Ones: ","Fifty Centavos: ", "Twenty Five Centavos: ", "Ten Centavos: ","Five Centavos: " };
        for (int a = 0; a < Denom.Length; a++)
        {
            int b = Convert.ToInt32(inputCents/Denom[a]);
            if (b == 0) //this will only show the denominations below the inputted amount
            {
                continue;
            }
            Console.WriteLine(DenomNames[a] + b);
        }
        }
    }
}