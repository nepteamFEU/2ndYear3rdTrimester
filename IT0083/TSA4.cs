using System;
public class Student
{
    private int ID;
    public void SetID(int ID)
    {this.ID = ID;}
    private string Name = "";
    public void SetName(string Name)
    {this.Name = Name;}
    private bool EnrollmentStatus;
    public void SetStatus(bool Status)
    {this.EnrollmentStatus = Status;}
    private int YearLevel;
    public void SetYearLevel(int YearLevel)
    {this.YearLevel = YearLevel;}
    private int AverageGrade;
    public void SetGrade(int Grade1, int Grade2, int Grade3)
    {this.AverageGrade = (Grade1+Grade2+Grade3)/3;}

   public void CreateStudent()
    {
        int inputID;
        while (true)
        {
            Console.WriteLine("What is the ID of the student?");
            if (int.TryParse(Console.ReadLine(), out inputID)) break;
            Console.WriteLine("Invalid ID. Please enter a valid integer.");
        }
        SetID(inputID);

        Console.WriteLine("What is the FULL NAME of the student?");
        string inputName = Console.ReadLine();
        SetName(inputName);

        SetStatus(true);

        int inputYear;
        while (true)
        {
            Console.WriteLine("What is the Year Level of the student?");
            if (int.TryParse(Console.ReadLine(), out inputYear)) break;
            Console.WriteLine("Invalid Year Level. Please enter a valid integer.");
        }
        SetYearLevel(inputYear);

        int grade1, grade2, grade3;
        while (true)
        {
            Console.WriteLine("Input the grades of the three previously taken subjects to get the average grade.");
            Console.WriteLine("This is for English, Mathematics and History respectively:");

            Console.WriteLine("English:");
            if (!int.TryParse(Console.ReadLine(), out grade1))
            {
                Console.WriteLine("Invalid grade. Please enter a valid integer.");
                continue;
            }

            Console.WriteLine("Mathematics:");
            if (!int.TryParse(Console.ReadLine(), out grade2))
            {
                Console.WriteLine("Invalid grade. Please enter a valid integer.");
                continue;
            }

            Console.WriteLine("History:");
            if (!int.TryParse(Console.ReadLine(), out grade3))
            {
                Console.WriteLine("Invalid grade. Please enter a valid integer.");
                continue;
            }

            break;
        }

        SetGrade(grade1, grade2, grade3);
        Console.WriteLine("The average is: " + this.AverageGrade);
    }
    public void ShowInfo()
    {
        Console.WriteLine("ID:" + this.ID);
        Console.WriteLine("Name:" + this.Name);
        Console.WriteLine("Enrollment Status:" + this.EnrollmentStatus);
        Console.WriteLine("Year Level:" + this.YearLevel);
        Console.WriteLine("Average Grade of previous attended school:" + this.AverageGrade);
    }
}

class mainProgram
{
    static void Main(string[] args)
    {
        Student TestStudent = new Student();
        TestStudent.CreateStudent();
        TestStudent.ShowInfo();
        return;
    }
}