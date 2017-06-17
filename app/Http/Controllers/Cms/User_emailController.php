<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser_emailRequest;
use App\Http\Requests\UpdateUser_emailRequest;
use App\Repositories\User_emailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class User_emailController extends AppBaseController
{
    /** @var  User_emailRepository */
    private $userEmailRepository;

    public function __construct(User_emailRepository $userEmailRepo)
    {
        $this->userEmailRepository = $userEmailRepo;
    }

    /**
     * Display a listing of the User_email.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userEmailRepository->pushCriteria(new RequestCriteria($request));
        $userEmails = $this->userEmailRepository->all();

        return view('user_emails.index')
            ->with('userEmails', $userEmails);
    }

    /**
     * Show the form for creating a new User_email.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_emails.create');
    }

    /**
     * Store a newly created User_email in storage.
     *
     * @param CreateUser_emailRequest $request
     *
     * @return Response
     */
    public function store(CreateUser_emailRequest $request)
    {
        $input = $request->all();

        $userEmail = $this->userEmailRepository->create($input);

        Flash::success('User Email saved successfully.');

        return redirect(route('userEmails.index'));
    }

    /**
     * Display the specified User_email.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userEmail = $this->userEmailRepository->findWithoutFail($id);

        if (empty($userEmail)) {
            Flash::error('User Email not found');

            return redirect(route('userEmails.index'));
        }

        return view('user_emails.show')->with('userEmail', $userEmail);
    }

    /**
     * Show the form for editing the specified User_email.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userEmail = $this->userEmailRepository->findWithoutFail($id);

        if (empty($userEmail)) {
            Flash::error('User Email not found');

            return redirect(route('userEmails.index'));
        }

        return view('user_emails.edit')->with('userEmail', $userEmail);
    }

    /**
     * Update the specified User_email in storage.
     *
     * @param  int              $id
     * @param UpdateUser_emailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUser_emailRequest $request)
    {
        $userEmail = $this->userEmailRepository->findWithoutFail($id);

        if (empty($userEmail)) {
            Flash::error('User Email not found');

            return redirect(route('userEmails.index'));
        }

        $userEmail = $this->userEmailRepository->update($request->all(), $id);

        Flash::success('User Email updated successfully.');

        return redirect(route('userEmails.index'));
    }

    /**
     * Remove the specified User_email from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userEmail = $this->userEmailRepository->findWithoutFail($id);

        if (empty($userEmail)) {
            Flash::error('User Email not found');

            return redirect(route('userEmails.index'));
        }

        $this->userEmailRepository->delete($id);

        Flash::success('User Email deleted successfully.');

        return redirect(route('userEmails.index'));
    }
}
