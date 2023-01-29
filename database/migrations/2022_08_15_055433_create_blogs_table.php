<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('detail');
            $table->string('link')->nullable();
            $table->string('linkName')->nullable();
            $table->longText('detailOne')->nullable();
            $table->string('linkNameOne')->nullable();
            $table->string('linkOne')->nullable();
            $table->longText('quote')->nullable();
            $table->string('quoteAuthor')->nullable();
            $table->longText('detailTwo')->nullable();
            $table->string('linkNameTwo')->nullable();
            $table->string('linkTwo')->nullable();
            $table->string('detailThree')->nullable();
            $table->string('titleOne')->nullable();
            $table->string('titleOneLinkName')->nullable();
            $table->longText('detailTitleOneLink')->nullable();
            $table->longText('detailTitleOne')->nullable();
            $table->string('titleTwo')->nullable();
            $table->string('titleTwoLinkName')->nullable();
            $table->longText('detailTitleTwoLink')->nullable();
            $table->longText('detailTitleTwo')->nullable();
            $table->string('titleThree')->nullable();
            $table->string('titleThreeLinkName')->nullable();
            $table->longText('detailTitleThreeLink')->nullable();
            $table->longText('detailTitleThree')->nullable();
            $table->string('titleFour')->nullable();
            $table->string('titleFourLinkName')->nullable();
            $table->longText('detailTitleFourLink')->nullable();
            $table->longText('detailTitleFour')->nullable();
            $table->string('titleFive')->nullable();
            $table->string('titleFiveLinkName')->nullable();
            $table->longText('detailTitleFiveLink')->nullable();
            $table->longText('detailTitleFive')->nullable();
            $table->string('titleSix')->nullable();
            $table->string('titleSixLinkName')->nullable();
            $table->longText('detailTitleSixLink')->nullable();
            $table->longText('detailTitleSix')->nullable();
            $table->string('titleSeven')->nullable();
            $table->string('titleSevenLinkName')->nullable();
            $table->longText('detailTitleSevenLink')->nullable();
            $table->longText('detailTitleSeven')->nullable();
            $table->string('titleEight')->nullable();
            $table->string('titleEightLinkName')->nullable();
            $table->longText('detailTitleEightLink')->nullable();
            $table->longText('detailTitleEight')->nullable();
            $table->string('titleNine')->nullable();
            $table->string('titleNineLinkName')->nullable();
            $table->longText('detailTitleNineLink')->nullable();
            $table->longText('detailTitleNine')->nullable();
            $table->string('titleTen')->nullable();
            $table->string('titleTenLinkName')->nullable();
            $table->longText('detailTitleTenLink')->nullable();
            $table->longText('detailTitleTen')->nullable();
            $table->string('titleConclusion')->nullable();
            $table->longText('detailConclusion')->nullable();
            $table->string('linkNameConclusion')->nullable();
            $table->longText('linkConclusion')->nullable();
            $table->longText('detailOneConclusion')->nullable();
            $table->string('linkNameOneConclusion')->nullable();
            $table->longText('linkOneConclusion')->nullable();
            $table->longText('quoteConclusion')->nullable();
            $table->string('quoteAuthorConclusion')->nullable();
            $table->longText('detailTwoConclusion')->nullable();
            $table->string('linkNameTwoConclusion')->nullable();
            $table->longText('linkTwoConclusion')->nullable();
            $table->longText('detailThreeConclusion')->nullable();
            $table->mediumText('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
