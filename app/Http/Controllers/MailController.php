<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['lang']))
        {
            $_SESSION['lang'] = 'RU';
        }
    }
    public function mail(Request $request)
    {
        $subject = "Новая заявка";

        $phone = $request->get('phone');
        $mail = $request->get('mail');
        $name = $request->get('name');


        $mailsend = mail('bm@ekzon.by', "$subject", "Имя: $name\nТелефон: $phone\nE-mail: $mail");


        if($mailsend) {
            $_SESSION['sended'] = true;
            return redirect($request->get('request_url'));
        }
    }
    public function feedback(Request $request)
    {
        $subject = "Обратная связь";

        $text = $request->get('text');
        $mail = $request->get('mail');
        $name = $request->get('name');


         $mailsend = mail('reklama@ekzon.by', "$subject", "Имя: $name\nСообщение: $text\nE-mail: $mail");


        if($mailsend) {
            $_SESSION['sended'] = true;
            return redirect($request->get('request_url'));
        }
    }
    public function med(Request $request)
    {
        $subject = "Связь с медицинским представителем";

        $city = $request->get('city');
        $phone = $request->get('phone');
        $name = $request->get('name');


        $mailsend = mail('reklama@ekzon.by', "$subject", "Город: $city\nТелефон: $phone\nКонтактное лицо: $name");


        if($mailsend) {
            $_SESSION['sended'] = true;
            return redirect($request->get('request_url'));
        }
    }
    public function interview(Request $request)
    {
        $subject = "Новый результат опроса";

        $spec = $request->get('spec');
        $buy = $request->get('buy');
        $know = $request->get('know');


        $mailsend = mail(
            'bm@ekzon.by',
            "$subject",
            "Являетесь ли вы специалистом в области здравоохранения?: $spec\nПриобретаете ли вы продукцию ОАО \"Экзон\"?: $buy\nОткуда вы узнаете о нашей продукции?: $know"
        );


        if($mailsend) {
            $_SESSION['sended'] = true;
            return redirect($request->get('request_url'));
        }
    }
    public function mailRegister(Request $request)
    {
        $subject = "Новый запрос на регистрацию";

        $name = $request->get('reg__fio');
        $mail = $request->get('reg__mail');
        $phone = $request->get('reg__phone');
        $org = $request->get('reg__org');
        $unp = $request->get('reg__unp');
        $strana = $request->get('reg__strana');
        $desc = $request->get('desc');
        $addr = $request->get('reg__address');
        $office = $request->get('reg__office');


        $mailsend = mail(
            'bm@ekzon.by',
            "$subject",
            "Фамилия Имя Отчество руководителя: $name\nКонтактный e-mail: $mail\nКонтактный телефон: $phone\nНаименование организации(ИП, Юрлицо): $org\nУНП: $unp\nСтрана: $strana\nДополнительное персональное сообщение: $desc\nАдрес: индекс, город, улица, дом: $addr\nНомер офиса(если есть): $office"
        );


        if($mailsend) {
            $_SESSION['sended'] = true;
            return redirect($request->get('request_url'));
        }
    }
    public function pharmaSpec(Request $request)
    {
        $subject = "Фармаконадзор (специалист)";

        $name_person = $request->get('pharma__person-name');
        $phone_person = $request->get('pharma__person-phone');
        $addr_person = $request->get('pharma__person-address');
        $message_person = $request->get('message');
        $lechenie = $request->get('lechenie');
        
        $pacient_name = $request->get('pharma__pacient-name');
        $pacient_number = $request->get('pharma__pacient-number');
        $pacient_sex = $request->get('pacientSex');
        $age = $request->get('age');
        $weight = $request->get('weight');
        $pechen = $request->get('pechen');
        $pochki = $request->get('pochki');
        $allergia = $request->get('allergia');

        $international_name = $request->get('internationalName');
        $trade_name = $request->get('tradeName');
        $new_manuf = $request->get('new-manuf');
        $new_seria = $request->get('new-seria');
        $med_need = $request->get('med-need');
        $med_enter = $request->get('med-enter');
        $med_dose = $request->get('med-dose');
        $med_krat = $request->get('med-krat');
        $med_start = $request->get('med-start');
        $med_end = $request->get('med-end');

        $med_other_name1 = $request->get('med-other-name1');
        $med_other_need1 = $request->get('med-other-need1');
        $med_other_enter1 = $request->get('med-other-enter1');
        $med_other_dose1 = $request->get('med-other-dose1');
        $med_other_krat1 = $request->get('med-other-krat1');
        $med_other_start1 = $request->get('med-other-start1');
        $med_other_end1 = $request->get('med-other-end1');

        $med_other_name2 = $request->get('med-other-name2');
        $med_other_need2 = $request->get('med-other-need2');
        $med_other_enter2 = $request->get('med-other-enter2');
        $med_other_dose2 = $request->get('med-other-dose2');
        $med_other_krat2 = $request->get('med-other-krat2');
        $med_other_start2 = $request->get('med-other-start2');
        $med_other_end2 = $request->get('med-other-end2');

        $med_other_name3 = $request->get('med-other-name3');
        $med_other_need3 = $request->get('med-other-need3');
        $med_other_enter3 = $request->get('med-other-enter3');
        $med_other_dose3 = $request->get('med-other-dose3');
        $med_other_krat3 = $request->get('med-other-krat3');
        $med_other_start3 = $request->get('med-other-start3');
        $med_other_end3 = $request->get('med-other-end3');

        $med_other_name4 = $request->get('med-other-name4');
        $med_other_need4 = $request->get('med-other-need4');
        $med_other_enter4 = $request->get('med-other-enter4');
        $med_other_dose4 = $request->get('med-other-dose4');
        $med_other_krat4 = $request->get('med-other-krat4');
        $med_other_start4 = $request->get('med-other-start4');
        $med_other_end4 = $request->get('med-other-end4');

        $med_other_name5 = $request->get('med-other-name5');
        $med_other_need5 = $request->get('med-other-need5');
        $med_other_enter5 = $request->get('med-other-enter5');
        $med_other_dose5 = $request->get('med-other-dose5');
        $med_other_krat5 = $request->get('med-other-krat5');
        $med_other_start5 = $request->get('med-other-start5');
        $med_other_end5 = $request->get('med-other-end5');



        $pharma_form = $request->get('pharma-form');
        $startDate = $request->get('startDate');
        $finishDate = $request->get('finishDate');
        $resultatPrekrPriema = $request->get('resultatPrekrPriema');
        $soputstvZabolevania = $request->get('soputstvZabolevania');
        $ishod = $request->get('ishod');
        $ocenkaPricinnoSledstvSvyazi = $request->get('ocenkaPricinnoSledstvSvyazi');
        $predprinyatieMeri = $request->get('predprinyatieMeri');
        $lekarstvennieSredstva = $request->get('lekarstvennieSredstva');
        $drugieMeri = $request->get('drugieMeri');
        $kriteriiOtneseniya = $request->get('kriteriiOtneseniya');
        $OtmechenoLiPovtorenie = $request->get('OtmechenoLiPovtorenie');
        $sredstvoPrimenyaetsyaV = $request->get('sredstvoPrimenyaetsyaV');
        
        $setDate = $request->get('setDate');
        $soputZabolev = $request->get('soputZabolev');
        $vzaimodeystviya = $request->get('vzaimodeystviya');
        $drugieSredstva = $request->get('drugieSredstva');
        
        $dopStr = $request->get('dopStr');
        
        $date = $request->get('date');
        $podpisVracha = $request->get('podpisVracha');




        $to = array('','pharmaconadzor@ekzon.by'); // кому отправляем

        $from = array("$name_person", ""); // От кого отправляем

        // Формируем заголовок
        $random_hash = md5(date('r', time()));
        $mime_boundary = "==Multipart_Boundary_x{$random_hash}x";
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-Type: multipart/mixed; boundary="'.$mime_boundary.'"' . "\r\n";
        $message = "--{$mime_boundary}\n" .
            "Content-Type:text/html; charset=\"utf-8\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n";
        $message .= 'Имя специалиста:' .$name_person.
                    '<br>Телефон специалиста: '.$phone_person.
                    '<br>Адрес специалиста: '.$addr_person.
                    '<br>Сообщение: '.$message_person.
                    '<br>Лечение: '.$lechenie.
                    '<br>Имя пациента: '.$pacient_name.
                    '<br>Номер медицинской карты: '.$pacient_number.
                    '<br>Пол пациента: '.$pacient_sex.
                    '<br>Возраст пациента: '.$age.
                    '<br>Вес пациента: '.$weight.
                    '<br>Печень: '.$pechen.
                    '<br>Почки: '.$pochki.
                    '<br>Аллергия: '.$allergia.
                    '<br>Международное непатентовое название: '.$international_name.
                    '<br>Торговое название: '.$trade_name.
                    '<br>Производитель: '.$new_manuf.
                    '<br>Номер серии: '.$new_seria.
                    '<br>Показание к применению: '.$med_need.
                    '<br>Путь введения: '.$med_enter.
                    '<br>Разовая доза: '.$med_dose.
                    '<br>Кратность введения: '.$med_krat.
                    '<br>Дата начала терапии: '.$med_start.
                    '<br>Дата окончания терапии: '.$med_end.
                    '<br>Международное непатентованное название или торговое название лекарственного средства1: '.$med_other_name1.
                    '<br>Показание к применению1: '.$med_other_need1.
                    '<br>Путь введения1: '.$med_other_enter1.
                    '<br>Разовая доза1: '.$med_other_dose1.
                    '<br>Кратность введения1: '.$med_other_krat1.
                    '<br>Дата начала терапии1: '.$med_other_start1.
                    '<br>Дата окончания терапии1: '.$med_other_end1.
                    '<br>Международное непатентованное название или торговое название лекарственного средства2: '.$med_other_name2.
                    '<br>Показание к применению2: '.$med_other_need2.
                    '<br>Путь введения2: '.$med_other_enter2.
                    '<br>Разовая доза2: '.$med_other_dose2.
                    '<br>Кратность введения2: '.$med_other_krat2.
                    '<br>Дата начала терапии2: '.$med_other_start2.
                    '<br>Дата окончания терапии2: '.$med_other_end2.
                    '<br>Международное непатентованное название или торговое название лекарственного средства3: '.$med_other_name3.
                    '<br>Показание к применению3: '.$med_other_need3.
                    '<br>Путь введения3: '.$med_other_enter3.
                    '<br>Разовая доза3: '.$med_other_dose3.
                    '<br>Кратность введения3: '.$med_other_krat3.
                    '<br>Дата начала терапии3: '.$med_other_start3.
                    '<br>Дата окончания терапии3: '.$med_other_end3.
                    '<br>Международное непатентованное название или торговое название лекарственного средства4: '.$med_other_name4.
                    '<br>Показание к применению4: '.$med_other_need4.
                    '<br>Путь введения4: '.$med_other_enter4.
                    '<br>Разовая доза4: '.$med_other_dose4.
                    '<br>Кратность введения4: '.$med_other_krat4.
                    '<br>Дата начала терапии4: '.$med_other_start4.
                    '<br>Дата окончания терапии4: '.$med_other_end4.
                    '<br>Международное непатентованное название или торговое название лекарственного средства5: '.$med_other_name5.
                    '<br>Показание к применению5: '.$med_other_need5.
                    '<br>Путь введения5: '.$med_other_enter5.
                    '<br>Разовая доза5: '.$med_other_dose5.
                    '<br>Кратность введения5: '.$med_other_krat5.
                    '<br>Дата начала терапии5: '.$med_other_start5.
                    '<br>Дата окончания терапии5: '.$med_other_end5.
                    '<br>Описание подозреваемой нежелательной реакции: '.$pharma_form.
                    '<br>Дата начала: '.$startDate.
                    '<br>Дата окончания: '.$finishDate.
                    '<br>Результат прекращения приема подозреваемого лекарственного средства: '.$resultatPrekrPriema.
                    '<br>Сопутствующие заболевания, иные состояния или факторы риска: '.$soputstvZabolevania.
                    '<br>Оценка причинно-следственной связи: '.$ocenkaPricinnoSledstvSvyazi.
                    '<br>Исход: '.$ishod.
                    '<br>Предпринятые меры: '.$predprinyatieMeri.
                    '<br>Лекарственные средства, применяемые для купирования нежелательной реакции(если потребовалось): '.$lekarstvennieSredstva.
                    '<br>Другие предпринятые меры: '.$drugieMeri.
                    '<br>Критерии отнесения к серьезным нежелательным реакциям(отметьте, если это подходит): '.$kriteriiOtneseniya.
                    '<br>Отмечено ли повторение нежелательной реакции после повторного назначения лекарственного средства: '.$OtmechenoLiPovtorenie.
                    '<br>Подозреваемое лекарственное средство применяется в: '.$sredstvoPrimenyaetsyaV.
                    '<br>Данные клинических, лабораторных, рентгенологических исследований и аутопсии, включая определение концентрации лекарственных средств в крови (тканях), если таковые имеются и связаны с нежелательной реакцией (пожалуйста, приведите даты): '.$setDate.
                    '<br>Сопутствующие заболевания, амнестические данные: '.$soputZabolev.
                    '<br>Подозреваемые лекарственные взаимодействия: '.$vzaimodeystviya.
                    '<br>Для врожденных аномалий указать все другие лекарственные средства, принимаемые во время беременности, а также дату последней менструации (укажите «нет» если такие средства отсутствуют): '.$drugieSredstva.
                    '<br>Дата:'.$date.
                    '<br>Подпись (инициалы врача):'.$podpisVracha.PHP_EOL;


        if($request->hasFile('dopStr'))
        {
            $file = $request->file('dopStr');
            $file->move(public_path() . '/images/pharm',$file->getClientOriginalName());

            $fileatt = public_path() .'/images/pharm/'.$file->getClientOriginalName(); // путь к файлу, который хотим отправить

            $fileatt_type = "application/octet-stream";
            $fileatt_name = 'photo.jpg';  // Имя файла, которое увидит получатель
            // Читаем вложенный файл
            $file = fopen($fileatt,'rb');
            $data = fread($file,filesize($fileatt));
            fclose($file);
            $data = chunk_split(base64_encode($data)); // Кодируем наш файлик
            // Вкладываем файл в письмо
            $message .= "--{$mime_boundary}\n" .
                "Content-Type: {$fileatt_type};\n" .
                " name=\"{$fileatt_name}\"\n" .
                "Content-Transfer-Encoding: base64\n\n" .
                $data . "\n\n" .
                "--{$mime_boundary}\n";
            unset($data);
            unset($file);
            unset($fileatt);
            unset($fileatt_type);
            unset($fileatt_name);
        }
        // отправляем письмо
        $mailsend = mail($to[1], $subject, $message, $headers);
        
        
        if($mailsend) {
            $_SESSION['sended'] = true;
            return redirect($request->get('request_url'));
        }

    }
    public function pharmaCons(Request $request)
    {
        $subject = "Фармаконадзор (потребитель)";

        $name = $request->get('pharma__cunsomer-name');
        $country = $request->get('pharma__cunsomer-country');
        $age = $request->get('pharma__cunsomer-age');
        $sex = $request->get('sex');
        $phone = $request->get('pharma__cunsomer-phone');
        $mail = $request->get('pharma__cunsomer-mail');
        $drugsName = $request->get('drugsName');
        $serial = $request->get('serial');
        $opisanieSluchaya = $request->get('opisanieSluchaya');


        $mailsend = mail(
            'pharmaconadzor@ekzon.by',
            "$subject",
            "ФИО: $name\nСтрана: $country\nВозраст: $age\nПол: $sex\nТелефон: $phone\nE-mail: $mail\nТорговое название лекарственного средства, которое Вы применяли (см. упаковку): $drugsName\nНомер серии (см. упаковку): $serial\nОписание случая нежелательной реакции /отсутствии эффективности: $opisanieSluchaya"
        );

        if($mailsend) {
            $_SESSION['sended'] = true;
            return redirect($request->get('request_url'));
        }
    }

    public function subscribe(Request $request)
    {
        $subject = "Новый запрос на рассылку новостей";

        $email = $request->get('email');

        DB::table('dispatch')->insert(['email' => $email]);
        $mailsend = mail('reklama@ekzon.by', "$subject", "E-mail: $email");

        if($mailsend) {
            $_SESSION['sended'] = true;
            return redirect($request->get('request_url'));
        }
    }

    public function order(Request $request)
    {
        $subject = "Новый заказ";
        
        $title = $request->get('title_ru');
        $volume = $request->get('volume');
        $franko = $request->get('franko');
        $count = $request->get('count');
        $name = Auth::user()->name;
        $mail = Auth::user()->email;

        $mailsend = mail('bm@ekzon.by', "$subject", "Кому: $name\nE-mail: $mail\nПродукт: $title\nУпаковка: $volume\nФранко-назначения: $franko\nКоличество: $count");

        if($mailsend) {
            $_SESSION['sended'] = true;
            return redirect($request->get('request_url'));
        }
    }
}