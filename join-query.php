$admin_questions = DB::table('applicant_questions')
            ->join('question_cats', 'applicant_questions.id', '=', 'question_cats.question_id')
            ->where('question_cats.cat_id',$category_id)
            ->where('applicant_questions.user_id','1')
            ->select('applicant_questions.*')
            ->get();
