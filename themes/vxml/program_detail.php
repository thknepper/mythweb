<?
/***                                                                        ***\
	program_detail.php                       Last Updated: 2003.08.22 (xris)

	This file defines a theme class for the program details section.
	It must define one method.   documentation will be added someday.

\***                                                                        ***/

#class theme_program_detail extends Theme {
class Theme_program_detail extends Theme {


	/*
		print_header:
		This function prints the header portion of the page specific to the program listing
	*/
	function print_header($start_time, $end_time) {
?>
<vxml>
<?
	}




	function print_page() {
		global $this_channel, $this_program;

   	$this->print_header($list_starttime, $list_endtime);

	// Print the page contents
?>
<prompt>You have selected <?=$this_program->title?> on channel <?=$this_channel->channum?></prompt>
<prompt>at <?=date('g:i A', $this_program->starttime)?> lasting <?=(int)($this_program->length/60)?> minutes</prompt>
<prompt>This programme is <?=$this_program->will_record ? '' : 'not'?> scheduled to record </prompt>

    <form>
      <field name="choice" type="digits?length=1" modal="true">
        <prompt>Press 1 for programme details</prompt>
        <prompt>Press 2 to not record this programme</prompt>
        <prompt>Press 3 to record this programme once</prompt>
        <prompt>Press 4 to record this timeslot daily</prompt>
        <prompt>Press 5 to record this timeslot weekly</prompt>
        <prompt>Press Hash to hear these options again</prompt>
      </field>
      <noinput count="1">
        I didn't hear anything
        <reprompt/>
      </noinput>
      <noinput count="2">
        I still didn't hear anything. Last chance
        <reprompt/>
      </noinput>
      <filled>
        <if cond="choice == 1">
          List Programme Details not yet implemented
        <elseif cond="choice == 2">
          <submit next="program_detail.php?chanid=<?=$this_channel->chanid?>+starttime=<?=$this_program->starttime?>+record=never+profile=Default+recpriority=0+autoexpire=on+maxepisodes=+save=Update" method="get" />
        <elseif cond="choice == 3">
          <submit next="program_detail.php?chanid=<?=$this_channel->chanid?>+starttime=<?=$this_program->starttime?>+record=once+profile=Default+recpriority=0+autoexpire=on+maxepisodes=+save=Update" method="get" />
        <elseif cond="choice == 4">
          <submit next="program_detail.php?chanid=<?=$this_channel->chanid?>+starttime=<?=$this_program->starttime?>+record=daily+profile=Default+recpriority=0+autoexpire=on+maxepisodes=+save=Update" method="get" />
        <elseif cond="choice == 5">
          <submit next="program_detail.php?chanid=<?=$this_channel->chanid?>+starttime=<?=$this_program->starttime?>+record=weekly+profile=Default+recpriority=0+autoexpire=on+maxepisodes=+save=Update" method="get" />
        <elseif cond="choice == #">
          <reprompt/>
        <else>
          That is not a supported option
          <reprompt/>
        </if>
      </filled>
		</form>
</vxml>
<?
	}

}

?>