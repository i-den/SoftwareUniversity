﻿using System;

class Program
{
    public static void Main(s)
    {

        int SleepNorm = 30000;
        int DaysOff = int.Parse(Console.ReadLine());

        int WorkingDaysPlayTime = (365 - DaysOff) * 63;
        int DaysOffPlayTime = DaysOff * 127;

        int TotalPlayTime = WorkingDaysPlayTime + DaysOffPlayTime;

        if (TotalPlayTime >= SleepNorm)
        {
            var hrs = (TotalPlayTime - SleepNorm) / 60;
            var mins = (TotalPlayTime - SleepNorm) % 60;

            Console.WriteLine("Tom will run away");
            Console.WriteLine("{0} hours and {1} minutes more for play", hrs, mins);
        }
        else
        {
            var hrs = (SleepNorm - TotalPlayTime) / 60;
            var mins = (SleepNorm - TotalPlayTime) % 60;

            Console.WriteLine("Tom sleeps well");
            Console.WriteLine("{0} hours and {1} minutes less for play", hrs, mins);
        }
    }
}