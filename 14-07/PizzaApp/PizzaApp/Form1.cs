namespace PizzaApp
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            label9.Text = textBox1.Text;
            label10.Text = textBox2.Text;
            label11.Text = richTextBox1.Text;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            if (checkBox1.Checked = true)
            {
                label15.Text = checkBox1.Text;
            }

            if (checkBox2.Checked = true)
            {
                label15.Text = checkBox2.Text;
            }

            if (checkBox3.Checked = true)
            {
                label15.Text = checkBox3.Text;
            }

            if (checkBox4.Checked = true)
            {
                label15.Text = checkBox4.Text;
            }

            if (checkBox5.Checked = true)
            {
                label15.Text = checkBox5.Text;
            }

            if (checkBox6.Checked = true)
            {
                label15.Text = checkBox6.Text;
            }

            if (checkBox7.Checked = true)
            {
                label15.Text = checkBox7.Text;
            }

            if (checkBox8.Checked = true)
            {
                label15.Text = checkBox8.Text;
            }

            if (checkBox9.Checked = true)
            {
                label15.Text = checkBox9.Text;
            }
        }

        /*private void checkedListBox1_SelectedIndexChanged(object sender, EventArgs e)
        {

        }*/
    }
}