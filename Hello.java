import java.io.PrintWriter;
class Hello
{
	public static void main(String[] args) throws Exception
	{
		PrintWriter writer = new PrintWriter("the-file-name.txt", "UTF-8");
		writer.println("The first line");
		writer.println("The second line");
		writer.println(args[0]);
		writer.close();
	}
}