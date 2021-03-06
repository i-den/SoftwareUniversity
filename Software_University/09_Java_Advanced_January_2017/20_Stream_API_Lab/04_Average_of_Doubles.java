import java.util.Arrays;
import java.util.OptionalDouble;
import java.util.Scanner;

public class AverageOfDoubles {

    public static void main(String[] args) {
        OptionalDouble inpRes = Arrays.stream(new Scanner(System.in).nextLine().split("\\s+"))
                .filter(str -> !str.isEmpty())
                .mapToDouble(Double::parseDouble)
                .average();

        System.out.println(inpRes.isPresent()
                ? String.format("%1$.2f",  inpRes.getAsDouble())
                : "No match"
        );
    }
}