<?php

use Illuminate\Database\Seeder;
use App\Sector;

class SectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$volanondo = "Swapnotthan gives major focus in the education sector as education impects more on the development of a country than anything else. In our country such a basic right as proper education is not provided to a vast amount of students. A lot of children don't go to school for earning their own living or not able to maintain educational expenses. Swapnotthan works for these underpriviliged children, teaches them, guides them, inspires them, sometimes provide educational expenses. <br>
					Volanondo Night School supported by Sylhet City Corporation is where swapnotthan works as a regualr service. Here most of the students are working children. They earn their livlihood working at day and attends school at night. They can only study at night. Inadequate number of teachers can't provide them proper education also lake of training is responsible in a way. <br>
					Swapnotthan's volunteers teaches in the school from class 5 to 10 three days in a week. They spend time to understand the problems and lakings of their study and gives most effort to every single children to improve their quality to compete in the real world. Swapnotthan feels proud to be a part of this work as students of Volanondo Night School are showing thumb to society's discriminatory system  & continuing their education with full intensity & passion. <br>
					Beside regualar education volunteers teach moral values to the students. They motivate them by narrating the stories of conquering the world. As a result of their participation in the curriculum, the students passed from this school are able to gain the status of being  an University students. Their participation in co-curriculum activities are admirable. Every year the volunteers of the Swapnothan celebrate the national days with the students of Volanondo Night School. On these days different types of programs like sports competition, art festival, quiz, open writing etc are organized on behalf of Swapnothan. <br>
					Swapnotthan also tries to provide college admission arrangements for the students of Volanondo Night School as these indigent children steps forward to a better future after passing their Secondary education. <br>
					Swapnotthan dreams about a future where no children will be out of school education, no drop out, no hungry mouth, no street children. Everyone is open to participate to our work by taking classes or helping by any other way not necessary to be a member of Swapnotthan. <br>
					The dream will be lit in every child's mind. Dream of a better future.";
		$chotomoni = "Swapnotthan's another vital work is Chotomoni Nibash. This is an orphanage of 0 to 6 years old children under Social welfare Directorate, Baghbari, Sylhet. They are the beautiful butterflies with no family. Not knowing their own identity they are the only family they got. But Swapnotthan provides them the family, a place they can trust, they can believe on. Volunteers stand beside them as brothers and sisters, spend time with them playing games, teaching healthy habits, entertaining them talk to them sing with them, laugh with them. Children easily accept them as their family demanding a lot of things depicts their trust. <br>
					Chotomoni Nibash is a true place of love. These children don't have anything in this world but love which anyone can feel with just a moment. They have enormous potentialities and lots of dreams. <br>
					Every Saturday Swapnotthan's volunteers visit Chotomoni Nibash and spend time with the little flowers. Besides this on every occasion like 21st February, 26th March, 16th December they observe with them by making the flag of our country with their little colorful hands painted. <br>
					Every year before Eid Swapnotthan arranges 'Mehedi Utshob' in Chotomoni Nibash. Volunteers brighten little hands of these children with Mehedi, gives them chocolate, toys, Knick-knacks. Swapnotthanians try to make them feel the love they are so eager to have. <br>
					Here Swapnotthanians meet Taslima, Fatema, Nasima, Nadia, Arafat and many more children who become a part of every Swapnotthanians life.";
        $bloodDonation = "Blood Donation is also a sector where Swapnotthan serve regularly. Swapnotthan has a blood donation archive named 'Sweccha'. Swapnotthan manage blood donor if requested. Blood donation is provided to helpless people mostly.";

        $sectors = [
        ['title'=>'Education','description'=>$volanondo],
        ['title'=>'Chotomoni Nibash','description'=>$chotomoni],
        ['title'=>'Blood Donation','description'=>$bloodDonation]
        ];

        foreach ($sectors as $sector) {
        	Sector::create($sector);
        }
    }
}
