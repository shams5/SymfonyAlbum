<?php

namespace App\DataFixtures;

use App\Entity\Album;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AlbumFixtures extends Fixture
{
        public function load(ObjectManager $manager)
        {

                $albumDatas = [
                    ['name' => "Flowers", 'subject' => "Une fleur , parfois appelée fleur ou fleur , est la structure de reproduction trouvée dans les plantes à fleurs (plantes de la division Magnoliophyta , également appelées angiospermes ). La fonction biologique d'une fleur est de faciliter la reproduction, généralement en fournissant un mécanisme pour l'union du sperme avec les ovules. Les fleurs peuvent faciliter l'allogamie (fusion de spermatozoïdes et d'ovules d'individus différents dans une population) résultant de la pollinisation croisée ou permettre l'autofécondation (fusion de spermatozoïdes et d'ovules d'une même fleur) lorsque l'autopollinisation se produit.", 'imgUrl' => "../assets/img/1.jpg", 'imgPrix' => 20],
                    ['name' => "Monuments", 'subject' => "Un monument est un type de structure qui a été explicitement créé pour commémorer une personne ou un événement, ou qui est devenu pertinent pour un groupe social dans le cadre de sa mémoire des temps historiques ou du patrimoine culturel, en raison de son caractère artistique, historique, politique, technique ou l'importance architecturale. Certains des premiers monuments étaient des dolmens ou menhirs , constructions mégalithiques construites à des fins religieuses ou funéraires. [1] Les exemples de monuments incluent les statues, les monuments commémoratifs (de guerre), les bâtiments historiques, les sites archéologiques et les biens culturels. S'il y a un intérêt public à sa préservation, un monument peut par exemple être inscrit au patrimoine mondial de l'UNESCO .", 'imgUrl' => "../assets/img/2.jpg", 'imgPrix' => 20],
                    ['name' => "Monuments", 'subject' => "Une montagne est une partie élevée de la croûte terrestre , généralement avec des flancs escarpés qui montrent un substrat rocheux exposé important . Une montagne diffère d'un plateau en ce qu'elle a une surface sommitale limitée et est plus grande qu'une colline , s'élevant généralement à au moins 300 mètres (1000 pieds) au-dessus des terres environnantes. Quelques montagnes sont des sommets isolés , mais la plupart se trouvent dans des chaînes de montagnes . ", 'imgUrl' => "../assets/img/3.jpg", 'imgPrix' => 20],
                    ['name' => "moderne", 'subject' => " modère le climat de la Terre et joue un rôle important dans le cycle de l'eau , le cycle du carbone et le cycle de l'azote . Bien que répandue depuis les temps préhistoriques de la navigation et de l'exploration en mer, l'étude scientifique moderne de la mer (océanographie) est largement liée au voyage du Challenger britannique des années 1870. [2] La mer est traditionnellement divisée en quatre ou cinq grandes parties, comme l' océan Pacifique et la mer Méditerranée .

                    ", 'imgUrl' => "../assets/img/4.jpg", 'imgPrix' => 20],
                    ['name' => "Monuments", 'subject' => "Une fleur , parfois appelée fleur ou fleur , est la structure de reproduction trouvée dans les plantes à fleurs (plantes de la division Magnoliophyta , également appelées angiospermes ). La fonction biologique d'une fleur est de faciliter la reproduction, généralement en fournissant un mécanisme pour l'union du sperme avec les ovules. Les fleurs peuvent faciliter l'allogamie (fusion de spermatozoïdes et d'ovules d'individus différents dans une population) résultant de la pollinisation croisée ou permettre l'autofécondation (fusion de spermatozoïdes et d'ovules d'une même fleur) lorsque l'autopollinisation se produit.", 'imgUrl' => "../assets/img/5.jpg", 'imgPrix' => 20],
                    ['name' => "moderne", 'subject' => "modère le climat de la Terre et joue un rôle important dans le cycle de l'eau , le cycle du carbone et le cycle de l'azote . Bien que répandue depuis les temps préhistoriques de la navigation et de l'exploration en mer, l'étude scientifique moderne de la mer (océanographie) est largement liée au voyage du Challenger britannique des années 1870. [2] La mer est traditionnellement divisée en quatre ou cinq grandes parties, comme l' océan Pacifique et la mer Méditerranée .

                    ", 'imgUrl' => "../assets/img/6.jpg", 'imgPrix' => 20],
                    ['name' => "cycle", 'subject' => "modère le climat de la Terre et joue un rôle important dans le cycle de l'eau , le cycle du carbone et le cycle de l'azote . Bien que répandue depuis les temps préhistoriques de la navigation et de l'exploration en mer, l'étude scientifique moderne de la mer (océanographie) est largement liée au voyage du Challenger britannique des années 1870. [2] La mer est traditionnellement divisée en quatre ou cinq grandes parties, comme l' océan Pacifique et la mer Méditerranée .

                    ", 'imgUrl' => "../assets/img/7.jpg", 'imgPrix' => 20],
                    ['name' => "cycle", 'subject' => "modère le climat de la Terre et joue un rôle important dans le cycle de l'eau , le cycle du carbone et le cycle de l'azote . Bien que répandue depuis les temps préhistoriques de la navigation et de l'exploration en mer, l'étude scientifique moderne de la mer (océanographie) est largement liée au voyage du Challenger britannique des années 1870. [2] La mer est traditionnellement divisée en quatre ou cinq grandes parties, comme l' océan Pacifique et la mer Méditerranée .

                    ", 'imgUrl' => "../assets/img/8.jpg", 'imgPrix' => 20],
                    ['name' => "Monuments", 'subject' => "modère le climat de la Terre et joue un rôle important dans le cycle de l'eau , le cycle du carbone et le cycle de l'azote . Bien que répandue depuis les temps préhistoriques de la navigation et de l'exploration en mer, l'étude scientifique moderne de la mer (océanographie) est largement liée au voyage du Challenger britannique des années 1870. [2] La mer est traditionnellement divisée en quatre ou cinq grandes parties, comme l' océan Pacifique et la mer Méditerranée .

                    ", 'imgUrl' => "../assets/img/9.jpg", 'imgPrix' => 20],
                    ['name' => "Monuments", 'subject' => "Une fleur , parfois appelée fleur ou fleur , est la structure de reproduction trouvée dans les plantes à fleurs (plantes de la division Magnoliophyta , également appelées angiospermes ). La fonction biologique d'une fleur est de faciliter la reproduction, généralement en fournissant un mécanisme pour l'union du sperme avec les ovules. Les fleurs peuvent faciliter l'allogamie (fusion de spermatozoïdes et d'ovules d'individus différents dans une population) résultant de la pollinisation croisée ou permettre l'autofécondation (fusion de spermatozoïdes et d'ovules d'une même fleur) lorsque l'autopollinisation se produit.", 'imgUrl' => "../assets/img/10.jpg", 'imgPrix' => 20]
                ];
                foreach ($albumDatas as $albumData) {
                $album = new Album;
                $album->setName($albumData['name']);
                $album->setSubject($albumData['subject']);
                $album->setImgUrl($albumData['imgUrl']);
                $album->setImgPrix($albumData['imgPrix']);
                //     $album->setCreationeDate($albumData['creationDate']);
                    
                    $manager->persist($album);
            }
                $manager->flush();
        }
}