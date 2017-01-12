<!DOCTYPE html>

<html lang="en">
		<head>

			<meta charset="UTF-8"  />
			<title>Reddit Comment on a Post Persona</title>
		</head>

			<!--The ID tags are being used here just to differentiate the different lists and whatever else, style could be used later but as of right now I'm just using them as a place holder for myself and well anyone who reads the code. If this is unorthodox and there is a different way of doing this then let me know and I will fix it.-->

	<body>
		<h1>(Reddit Comment on a Post)</h1>
		<h3>Persona of Jimmy Smtih</h3>
		<ul>
			<li>Name : Jimmy Smtih</li>
			<li>Age: 16</li>
			<li>Occupation: Works at Dion's. (Typical of a product sponge worthless teenager.)</li>
			<li>Technology: Owns a Samsung Galaxy s5 (OS is updated to 5.0 Lollipop and has Verizon as a mobile carrier)</li>
			<li>Needs: As a teenager currently in High School and working at a glorified baked dough, cheese, and tomato shop his main needs are to escape his reality and substitute his own and to take out his pent up rage and hormone imbalances and take them out on random strangers on the internet who are only looking for a little bit of entertainment to distract themselves from their dead end jobs as well. TL;DR: he needs a source of entertainment where he can watch videos of cats playing and insult strangers simultaneously.</li>
			<li>Goals: His goals are to ruin the lives of everyone around him and even miles away with mean comments while watching a .gif of a kitten playing with a sock.</li>
		</ul>
		<img src="images/douche.jpg" alt="Picture of a teenager">
		<h3>Use Case</h3>
		<p id="Use-Case">Jimmy needs to get on Reddit and post a comment on a post that someone has made. So typically he would be inside of the Reddit app on his phone watching the video of someone playing with their new kitten with one of their socks. In order to leave a comment he would need to have a username and password which would typically already be verified. Depending on where he is in the post if he is currently looking at the .gif he needs to go back one step to the core post. From there the post should normally be highlighted so he can already see the list of options for said post so all he needs to do is hit "comments." From here he will see a list of all of the comments previously made by other users and at the top there is a button that looks like a generic "text bubble." If he clicks on that the app will then send him to a new section where he can begin typing his tirade of spelling errors, CAPS LOCK ABUSE, and hate mail to a person he doesn't even know thousands of miles away. After he is finished dumping his excess of testosterone and "douchestrogen" all he has to do is push a little button that looks like a paper airplane. (A thumbnail of the Hindenburg going down might be more apt in this scenario.) After he hits that the comment is sent, the owner is informed that they have a new comment "oh joy!" and the page will refresh showing him his masterpiece right on top of all the other well thought out and non hate crime filled comments.
		</p>
		<h3>Interaction Flow</h3>
			<ol class="Interaction-Flow">
			<!--This is assuming that he was already in the app, logged in, and viewing the content.-->
				<li>Jimmy has to hit the back button to go back from the .gif which prompts the app to reload the main page and leave the last link he has clicked on.</li>
				<li>Jimmy clicks the post base (not the link or the thumbnail as that will send him back into the image) and it prompts the app to drop down a list of options that are horizontally listed including "comments." </li>
				<li>Jimmy clicks on comments and the app reloads a new page with the post on top with a thumbnail and a list of parent and child comments that are all time stamped with the oldest typically on top.</li>
				<li>Jimmy clicks on the button that looks like a generic text bubble which prompts the app to load a typing page where he can write his own custom comment which is directly linked to the post.</li>
				<li>Jimmy types his comment into the text screen and then clicks the post button which prompts the app to add the comment to the post, which will send a notification to the post owner with a link to the comment and will refesh the comments page putting his comment directly on top for only him. (I'm assuming for editing/review purposes. If the page is refreshed again the comment will be relocated to its place among the other comments.) </li>
				<li>Jimmy walks away satisfied because he's a douche.
				</li>
		</ol>
		<!--This might be more or less incorrect but I will give it my best shot.-->
		<h3>Conceptual Model</h3>
		<ul class="Conceptual-Model">
			<li><strong>Profile</strong></li>
		</ul>
		<ol>
			<li>ProfileId(primary key)</li>
			<li>ProfileDateCreated</li>
			<li>ProfileEmail</li>
			<li>ProfileUserDOB</li>
		</ol>
		<ul>
			<li><strong>Post</strong></li>
		</ul>
		<ol>
			<li>PostId(primary key)</li>
			<li>PostContent/link</li>
			<li>PostDateTime</li>
			<li>PostProfileId(foreign key)</li>
		</ol>
		<ul>
			<li><strong>Comment</strong></li>
		</ul>
		<ol>
			<li>CommentProfileId(foreign key)</li>
			<li>CommentId (probably hidden, db use only)</li>
			<li>CommentContent</li>
			<li>CommentDateTime</li>
		</ol>
		<ul>
			<li><strong>Upvote/downvote (weak entity)</strong></li>
		</ul>
		<ol>
			<li>UpvoteCommentId(foreign key)</li>
			<li>UpvotePostId(foreign key)</li>
			<li>DownvoteCommentId(foreign key)</li>
			<li>DownvotePostId(foreign key)</li>
		</ol>
		<ul>
			<li><strong>Relations</strong></li>
		</ul>
		<ol>
			<li>One <strong>Profile</strong> can make many <strong>Posts</strong> - (1:n)</li>
			<li>One <strong>Post</strong> can have many <strong>Comments</strong> - (1:n)</li>
			<li>One <strong>Comments</strong> can have many <strong>Comments</strong> - (1:n)</li>
			<li>Many <strong>Posts</strong> can have many <strong>Upvotes</strong> - (m:n)</li>
			<li>Many <strong>Comments</strong> can have many <strong>Upvotes</strong> - (m:n)</li>
			<li>Many <strong>Posts</strong> can have many <strong>Downvotes</strong> - (m:n)</li>
			<li>Many <strong>Comments</strong> can have many <strong>Downvotes</strong> - (m:n)</li>
		</ol>
	</body>

	<!-- Ben Smith 1-11-17 -->
</html>