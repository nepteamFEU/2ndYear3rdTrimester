using System;
namespace DateZodiacChecker
{
    class mainProgram
    {
        static void Main(string[] args)
        {
            //Date Checker
            string [] Months31 = {"January", "March", "May", "July", "August", "October", "December"}; // months with upto 31 days
            string [] Months30 = {"April", "June", "September", "November"}; //months with upto 30 days
            string Month = "month"; int Day, Year = 0; //initialization
            while (true) {
                Console.WriteLine("Input a year below 3000:");
                Year = Convert.ToInt16(Console.ReadLine());
                if (Year > 0 && Year < 3000)
                {break;}
                else
                {Console.WriteLine("Input a valid year. Try a year below 3000.");}
            }
            while (true) {
                Console.WriteLine("Input a month:");
                Month = Console.ReadLine();
                if (Months31.Contains(Month) || Months30.Contains(Month) || Month == "February")
                {break;}
                else
                {Console.WriteLine("Input a valid month.");}
            }
            while (true) {
                Console.WriteLine("Input a day: The month and year is " + Month + " " + Year);
                Day = Convert.ToInt16(Console.ReadLine());
                if (Months30.Contains(Month) && Day > 30 || Day <= 0) 
                //checks if the month has 30 days but the day is past 30
                    {Console.WriteLine("Input a valid day.");}
                else if (Month == "February" && Year%4 != 0 && Day > 28 || Day <= 0) 
                //leap year, checks if it is past 28
                    {Console.WriteLine("Input a valid day.");}
                else if (Month == "February" && Year%4 == 0 && Day > 29 || Day <= 0) 
                //not leap year, checks if it is past 29
                    {Console.WriteLine("Input a valid day.");}
                else if (Months31.Contains(Month) && Day > 31 || Day <= 0)
                    {Console.WriteLine("Input a valid day.");}
                // checks if the month has 31 days but the day past 31
                else
                {break;}
            }
            Console.WriteLine("The date is: " + Month + " " + Day + "," + Year);
            //Zodiac Checker
            int z = 0;
            String [] Zodiac = { "Aries", "Taurus", "Gemini", "Cancer", "Leo", "Virgo", "Libra","Scorpio", "Sagittarius", "Capricorn", "Aquarius", "Pisces"};
            if      ((Month == "March"      && Day >= 21) || (Month == "April"     && Day <= 19)) {z=0;}
            else if ((Month == "April"      && Day >= 20) || (Month == "May"       && Day <= 20)) {z=1;}
            else if ((Month == "May"        && Day >= 21) || (Month == "June"      && Day <= 20)) {z=2;}
            else if ((Month == "June"       && Day >= 20) || (Month == "July"      && Day <= 20)) {z=3;}
            else if ((Month == "July"       && Day >= 20) || (Month == "August"    && Day <= 20)) {z=4;}
            else if ((Month == "August"     && Day >= 20) || (Month == "September" && Day <= 20)) {z=5;}
            else if ((Month == "September"  && Day >= 20) || (Month == "October"   && Day <= 20)) {z=6;}
            else if ((Month == "October"    && Day >= 20) || (Month == "November"  && Day <= 20)) {z=7;}
            else if ((Month == "November"   && Day >= 20) || (Month == "December"  && Day <= 20)) {z=8;}
            else if ((Month == "December"   && Day >= 20) || (Month == "January"   && Day <= 20)) {z=9;}
            else if ((Month == "January"    && Day >= 20) || (Month == "February"  && Day <= 20)) {z=10;}
            else if ((Month == "February"   && Day >= 20) || (Month == "March"     && Day <= 20)) {z=11;}
            Console.WriteLine("The zodiac sign on this date is: " + Zodiac[z]); //looks horrendous 
        }
    }
}