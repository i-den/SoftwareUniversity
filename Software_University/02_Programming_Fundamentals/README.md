<h1 align="center"><em>Programming Fundamentals - May 2017</em></h1>
 
<br />

 ## *The second course introducing different data structures and objects*
>  ### *Primitive Data Types*
 ```C#
 int a = 1;
 double b = 1.5;
 char c = 'a';
 string d = "Name";
 bool e = true;
 
 ```
> ### *Arrays*
 ```C#
 var newIntArray = new int[num];
 var anotherNewIntArray = new[] { 1, 2, 3 };
 var consoleReadArray = Console.ReadLine().Split().ToArray();
 ```
> ### *Methods*
 ```C#
 var a = 3;
 var b = 4D;
 Sum(a, b); 
 var c = Multiply(a, b);

 private void Sum(int firstNumber, double secondNumber)
 {
  Console.WriteLine(firstNumber + secondNumber);
 }

 private double Multiply(int firstNumber, double secondNumber)
 {
  return firstNumber * secondNumber;
 }
 ```
> ### *Dictionaries (Associative Arrays)*
 ```C#
var studentGradeList = new Dictionary<string, List<double>>();
var students = new[] { "Ivan", "Georgi", "Teodor", "Ivan", "Georgi", "Maria", "Anna" };
var randomNumberGenerator = new Random();

for (int i = 0; i < students.Length; i++)
{
    var currentStudent = students[i];

    if (!studentGradeList.ContainsKey(currentStudent))
    {
        studentGradeList[currentStudent] = new List<double>();

        for (int j = 0; j < 3; j++)
        {
            var currentGrade = randomNumberGenerator.Next(2, 7);

            studentGradeList[currentStudent].Add(currentGrade);
        }
    }
}

foreach (var currentStudent in studentGradeList)
{
    var currentStudentName = currentStudent.Key;
    var currentStudentGrades = currentStudent.Value;

    Console.Write($"Student {currentStudentName}'s grades are:");

    foreach (var currentGrade in currentStudentGrades)
    {
        Console.Write($" {currentGrade}");
    }

    Console.WriteLine();
}
 ```
 > ### *Basic Objects and Classes*
 ```C#
 static void Main()
{
    var cats = new Cat[]
    {
    new Cat
     {
        Name = "Andre",
        Age = 2
     },
    new Cat
     {
        Name = "Jina",
        Age = 3
     }
    };

    foreach (var currentCat in cats)
    {
        currentCat.Meow();
    }
}

class Cat
{
    public string Name { get; set; }

    public int Age { get; set; }

    public void Meow()
    {
        Console.WriteLine($"{this.Name} aged {this.Age} years says meow");
    }
}
  ```
> ### *Lambda Functions, Text Processing and Regular Expressions (RegEx)*
 ```C#
var startAndEndMatches =
     Regex.Match(Console.ReadLine(),
     @"^(?<start>[a-zA-Z]+(?=\<|\\|\|))[<\\|].*[<\\|](?<=\<|\\|\|)(?<end>[a-zA-Z]+)");

var inputText = Console.ReadLine();

var start = startAndEndMatches.Groups["start"].Value;
var end = startAndEndMatches.Groups["end"].Value;
var regexPattern = $"{start}" + @"(.*?)" + $"{end}";

var matches = Regex.Matches(inputText, regexPattern)
    .Cast<Match>()
    .Select(m => m.Groups[1].Value)
    .Where(m => m != string.Empty)
    .ToArray();

Console.WriteLine(matches.Any()
 ? string.Join(string.Empty, matches) 
 : "Empty result");
  ```
  
<p align="center">
<a href="https://softuni.bg/trainings/1619/programming-fundamentals-may-2017">Course Page</a> <br />
<a href="https://judge.softuni.bg/Contests#!/List/ByCategory/32/Progr-Fundamentals-Exercises">Judge</a>
<p>
