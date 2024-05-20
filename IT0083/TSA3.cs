int digit = 0;
int correct = 0;
Random rnd = new Random();
int number = 0;
while(true)
{
    Console.WriteLine("ENTER CHOICE\n[1]2-Digit game\n[2]3-Digit game\n[3]Exit");
    Console.WriteLine("You have guessed " + correct + " times correctly.");
    int choice = Convert.ToInt32(Console.ReadLine());
    switch (choice)
        {
            case 1:
                digit = 2;
                number = rnd.Next(10,99);
                break;
            case 2:
                digit = 3;
                number = rnd.Next(100, 999);
                break;
            case 3:
                Environment.Exit(0);
                break;
            default:
            Console.WriteLine("Try again.");
            break;
        }
    int wrong = 0;
    int secret = number;
    int c = secret % 10;
    int b = (secret / 10) % 10;
    int a = secret / 100;
    int[] testArray = new int[3];
    testArray[0] = a;
    testArray[1] = b;
    testArray[2] = c;
    wrong = 0;
    bool guessedCorrectly = false;
    while (wrong != 3 && digit != 0 && !guessedCorrectly)
        {
            Console.WriteLine(number); // THIS IS TO KNOW WHAT THE SECRET NUMBER IS
            Console.WriteLine("Input your " + digit + " digit number:");
            int input = Convert.ToInt32(Console.ReadLine());
            int f = input % 10;
            int e = (input / 10) % 10;
            int d = input / 100;
            int[] testArrays = new int[3];
            testArrays[0] = d;
            testArrays[1] = e;
            testArrays[2] = f;
            for (int k = 0; k < digit; k++)
            {
               if (testArrays[k] != testArray[k])
               {
                wrong++;
                Console.WriteLine("INCORRECT.");
                guessedCorrectly = false;
                break;
               }
               if (k == (digit - 1))
               {
                guessedCorrectly = true;
               }
            }
        }

        if (wrong == 3)
        {
            Console.WriteLine("You have reached the maximum amount of attempts.");
            Environment.Exit(0);
        }

        if (guessedCorrectly)
        {
            Console.WriteLine("You have guessed the correct number!");
            correct++;
        }
    
}
