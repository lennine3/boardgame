
<div id="review_list">
    @if ($comments!=null)
@foreach ($comments as $comment)
    <div class="review_item">
        <div class="media">
            <div class="row">
                <div class="col-lg-1">
                    <img src="@php
                                    if($comment->role_user==3)
                                    echo asset('Img/customer-avatar/'.$comment->customerRelation->avatar);
                                    elseif($comment->role_user==1||$comment->role_user==2)
                                    echo asset('Img/user-img/'.$comment->staffRelation->avatar);
                                    else
                                    echo asset('Img/unsigned.png');
                                @endphp" alt=""  class="comment_radius">
                </div>
                <div class="col-lg-11">
                    <div class="review_body">
                        <h4>{{ $comment->userRelation->name }}</h4>
                        <span>87 </span>point
                    </div>
                </div>
            </div>
        </div>
        <p>{{ $comment->comment }}</p>
    </div>
    @endforeach
@endif
</div>
