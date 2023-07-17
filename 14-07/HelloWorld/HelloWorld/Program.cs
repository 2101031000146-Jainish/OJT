using System;

namespace MyApplication
{
    class Program
    {
        static void Main(string[] args)
        {

            Console.WriteLine("Enter number");
            int Num = Convert.ToInt32(Console.ReadLine());

            for (int i = 1; i < Num; i++)
            {
                for (int j = Num; j>=i; j--)
                {
                    Console.Write(" ");
                }

                for (int j = 1; j <= i; j++)
                {
                    Console.Write("*");
                }

                for (int j = 1; j<i; j++)
                {
                    Console.Write("*");
                }

                Console.WriteLine();
            }
        }
    }
}

