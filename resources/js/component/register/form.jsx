import React from "react";
import { useForm } from "react-hook-form";

export default function Form() {
    const { register, handleSubmit, errors } = useForm();
    const onSubmit = data => {
        console.log('body:');
        console.log(data);
        fetch('/api/user/create', {
            method: 'POST',
            body: JSON.stringify(data)
        })
            .then(res => res.json())
            .then(
                (result) => {
                    console.log('result:');
                    console.log(result);
                },
                (error) => {
                    console.log(error);
                }
            )
    };

    return (
        <form onSubmit={handleSubmit(onSubmit)}>
            <input name="username" ref={register({ required: true })} />
            {errors.username && <span>This field is required</span>}

            <input name="email" type="email" ref={register({ required: true })} />
            {errors.email && <span>This field is required</span>}

            <input name="password" type="password" ref={register({ required: true })} />
            {errors.password && <span>This field is required</span>}

            <input type="submit" />
        </form>
    );
}
